<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<xmp>7. There is a list of 15 cand names in an exam hall. Invigilator has to put some stationery
on the desk of 5 students. Student names are input by the user. Write a program which lets
user input a name (one at a time), finds the seat number of the inputted name and confirms
through a message that stationery has been placed on the desk of the student. Create this
program using user input, loop and search operation of array.</xmp>
<style>
	body {background-color: pink; }
</style>

<?php
	#declare array of 15 elements
$allStudents = array("Sam","James","Banu","Samuel","Tim","Max","Essa","Kishan","Kitty","Daniel","Arnab","Dave","Hanna","David","Kaur");

	#check for POST method, if stList exisits, assign to array - stationeryPlaced
	#stationeryPlaced - will contain the 5 student names having stationary plced on desk
if(isset($_POST['stList']))
{
	$stationeryPlaced = explode(',',$_POST['stList']);
	$stationeryPlaced = array_filter($stationeryPlaced, 'strlen'); #remove empty element
}else{
	$stationeryPlaced = array();
}

	#check for post method with value - name. this is the form input of user seeking student seat number.
if(isset($_POST["name"]))
{
	echo "<h4>Looking for: ", $_POST["name"] , "</h4>"; 
	$seatID = array_search($_POST["name"], $allStudents);
	if($seatID === false){
			#look for given student name in list of 15
		echo "<h3>Student name not found.</h3>";
	}
	else if(count($stationeryPlaced) >= 5){
			#only accept 5 names MAX
		echo "<h3>5 Students selected already.</h3>";
	}else if(in_array($_POST["name"], $stationeryPlaced )){
			#check if student already in list - stationeryPlaced, meaning they alreayd have stationary on desk
		echo "<h3>Stationary already placed for ", $_POST["name"], " </h3>";
	}else{
			#if all other conditions are false, place stationary on desk and display message - SEAT NUMBER
		array_push($stationeryPlaced,$_POST["name"]); 
		echo "<h2>Stationary has been placed for ", $_POST["name"], " with <i> Seat No: ", $seatID ,"</i></h2>";
		$stName = $_POST["name"];
			//echo "<script>alert( \" $stName - Seat No:  $seatID \")</script>";
	}
}
	#implode() method returns a string from the elements of an array. this is passed on thought post method
$ids = implode(',',$stationeryPlaced);
?>

<form action="" method="POST">
	Enter Name: <input type="text" name="name"> <input type="submit" value="Place Stationary">
	<input type="submit" value="Reset Data" name="resetData">
	<input type="hidden" name="stList" value="<?php echo $ids;?>"/>
</form>

<table>
	<tr><td><h3>Total Students in Exam Hall:  <?= count($allStudents) ?> </h3>
		<?	print("<pre>".print_r($allStudents,true)."</pre>"); ?>

	</td><td><h3>Stationary placed so far: <?= count($stationeryPlaced) ?> </h3>
		<h4> Students having stationery already: </h4><ul>
			<?	
			#foreach loop is used to display the list of students who has stationary on their desk
			foreach($stationeryPlaced as $val){
				echo "<li> $val </li>";
			}
			?>
		</tr>
	</table>
	
<?
	#reset POST data with press of button in form
if (isset($_POST['resetData'])){
	unset($_POST);
	header("Location: ".$_SERVER['PHP_SELF']);
}
?>