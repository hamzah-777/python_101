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
$stationeryPlaced = array();
?>

<span style=" position: absolute; left: 500px;">
<h3>Total Students in Exam Hall:  <?= count($allStudents) ?> </h3>
<?	print("<pre>".print_r($allStudents,true)."</pre>"); ?>
</span>

<form action="">
	Enter 5 student Names to place stationary: <br>
	<?
		$listof5 = array("student1","student2","student3","student4","student5");
		foreach ($listof5 as $st){
			echo "$st : <input type=\"text\" name=\"$st\"><br>";
		}
	?>
	
	<input type="submit" name="submitData" value="Place Stationary">
	<input type="submit" value="Reset Data" name="resetData">
</form>



<?php
	#check for post method with value - name. this is the form input of user seeking student seat number.
if(isset($_POST["submitData"]))
{
	$listof5POST = array();
	for ($i=1; $i<=5; $i++){
		$listof5POST[$i] = $_POST["student$i"];
	}
	
	//var_dump ($listof5POST);
	
	foreach($listof5POST as $st){
		$seatNo = array_search($st, $allStudents);
		if($seatNo !== false){
			//name found among 15-list
			echo "<h4>$st : found in seat no: $seatNo . Stationary placed on desk.</h4>";
			array_push($stationeryPlaced,$st);
		}else{
			echo "<h5>Student: $st : not found in list of 15 students at hand.</h4>";
		}
	}
	
}

	#reset POST data with press of button in form
if (isset($_POST['resetData'])){
	unset($_POST);
	header("Location: ".$_SERVER['PHP_SELF']);
}
?>

<h4> Students having stationery : <?= count($stationeryPlaced) ?> </h4><ul>
			<?	
			#foreach loop is used to display the list of students who has stationary on their desk
			foreach($stationeryPlaced as $val){
				echo "<li> $val </li>";
			}
			?>
</ul>