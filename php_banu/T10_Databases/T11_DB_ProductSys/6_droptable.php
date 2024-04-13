<?php
/*
Program by Banuka Vidusanka
resources: w3school.com
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";

$sql = "DROP TABLE $tbname1";

if( isset($_POST['droptable'])){
	unset($_POST['droptable']);
	if ($conn->query($sql) === TRUE) {
	  alertFunc("Table dropped successfully");
	} else {
	  alertFunc("$conn->error");
	}
	header( 'refresh:0; url=index.php' ) ;
	return;

}
?>

<html>
<head>
  <title>ProductSys by Banuka</title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head><body>
<h1>Product Management - CRUD APP by <i>Banu</i></h1>
<h3>Confirm: Drop Table</h3>

<form method="POST">
<input type="submit" value="Drop Table" name="droptable">
<a class="btn" href="index.php">Go Back</a>
</form>
