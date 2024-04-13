<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<xmp>1. There are 80 students in a class and they have to go for a professional test. Only 8 students
can go in a lab in one slot. Print the group wise list of roll numbers in each slot using slice
method and a loop statement.
</xmp>
<style>
	body {background-color: aquamarine; }
</style>

<?php
//create array of 80 rollnumbers in the form D1807_A1-A80
$stList = array();
for($i=1; $i<=80; $i++){
	array_push($stList, "D1807_A$i");
}

$groupcount = 0;
for($x=0; $x< 80; $x+=8){
	$tempArray = array_slice($stList, $x, 8);
	$groupcount++;
	echo "<h4>Group no: $groupcount sititng for exam- roll numbers:</h4>";
	foreach($tempArray as $rno){
		echo "[ $rno ] ";
	}
}	

echo "<h1>------------------</h1>";
?>

<?php
//create array of 80 rollnumbers in the form Roll_A1-A80
$stList = array();
$groupList = array();

for($i=1; $i<=80; $i++){
	array_push($stList, "Roll_A$i");
}

for($x=1; $x<=10; $x++){
	$start = $x*8 - 8;
	//slice from start to 8 elements length in each loop call
	//tempArray will hold each 8 student group.
	$tempArray = array_slice($stList, $start, 8);
	$groupList["group".$x] = $tempArray; //make associative array of group wise students

	echo "<h4>Group : $x sititng for exam- roll numbers:</h4>";
	foreach($tempArray as $rno){
		echo "[ $rno ] ";
	}
}	

echo "<hr><pre>All 80 roll numbers - var dump";
var_dump($groupList);
?>