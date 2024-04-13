<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<xmp>4. There is a merged section of 15 students (D1610) and 5 students (D1609). Result of D1609
has been declared and for that you have to pick the relevant roll numbers from merged list.
Write a program to do the same using array_diff() method.
</xmp>
<style>
	body {background-color: aquamarine; }
</style>

<?php
$AllSt = array("A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9", "A10", "A11", "A12", "A13", "A14", "A15", "A16", "A17", "A18", "A19", "A20");

echo "<h3>All students</h3>";
var_dump($AllSt);

$D1609 = array("A6", "A2", "A9", "A18", "A16"); //students in D1609
//get list od students from section D1610

$D1610 = array_diff($AllSt,$D1609);#
echo "<h3>D1610 students</h3>";
var_dump($D1610);

?>