<?php
$con = new mysqli("localhost","","","test");

if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

$qry = "SELECT * FROM complaint";
$result= $con -> query($qry);
echo "<h1><br>First Way:";

$row = $result -> fetch_array(MYSQLI_NUM); 
echo "<br>";
printf ("%s %s %s %s\n", $row[0], $row[1],$row[2],$row[3]);

$row = $result -> fetch_array(MYSQLI_ASSOC);
echo "<h1><br>Other Way:";
printf ("%s (%s)\n", $row["C_Number"], $row["C_Desc"]);

$result -> free_result();

$con -> close();
?>