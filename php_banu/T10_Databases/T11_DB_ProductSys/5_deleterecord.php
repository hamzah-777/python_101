<?php
/*
Program by Banuka Vidusanka
resources: w3school.com
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";

if( isset( $_POST['p_id'] )){
$p_id = $_POST['p_id'];
}

if( isset($_POST['confirmdelete']) && isset($_POST['p_id']) ){
	unset($_POST['confirmdelete']);
	unset($_POST['p_id']);

	$sql = "DELETE FROM $tbname1 WHERE id= $p_id";
	if ($conn->query($sql) === TRUE) {
		alertFunc("Record deleted successfully");
	} else {
	  	alertFunc( "Record deleted error:" . $conn->error);
	}
	header( 'refresh:0; url=index.php' ) ;
	return;
}

$sql = "SELECT * FROM $tbname1 WHERE id=$p_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<table class='tbclass1'>";
		echo "<tr><th>ID</th><th>Product</th><th>Brand</th><th>Value</th><th>Time entered</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["p_name"]. "</td><td>" . $row["p_brand"]. "</td><td>" . $row["p_value"]. "</td><td>" . $row["p_date"]. "</td></tr>";
  }
  echo "</table>";
} else {
 	alertFunc("Record not found");
	header( 'refresh:0; url=index.php' ) ;
}

?>

<html>
<head>
  <title>ProductSys by Banuka</title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head><body>
<h1>Product Management - CRUD APP by <i>Banu</i></h1>
<h3>Confirm: Delete Record: </h3>

<form method="POST">
<input type="submit" value="Delete Record" name="confirmdelete">
<input type="hidden" name="p_id" value="<?= $p_id ?>">

<a class="btn" href="index.php">Go Back</a>
</form>
