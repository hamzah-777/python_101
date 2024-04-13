<?php
/*
Program by Banuka Vidusanka
resources: w3school.com
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";


if ( isset($_POST['submitData'])){
	$p_name = $_POST['p_name'];
	$p_brand = $_POST['p_brand'];
	$p_value = $_POST['p_value'];
	unset($_POST['submitData']);

	$sql = "INSERT INTO $tbname1 (p_name, p_brand, p_value)
	VALUES ('$p_name', '$p_brand', $p_value)";

	if ($conn->query($sql) === TRUE) {
	  alertFunc("New record created successfully");
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
<h2>Insert New Record</h2>
<form method="POST" class="formclass">
	<span class="label1">Product Name</span> <input type="text" name="p_name" required><br>
	<span class="label1">Product Brand </span> <input type="text" name="p_brand" required><br>
	<span class="label1">Product Value </span> <input type="number" name="p_value" required><br><br>
	<input type="submit" name="submitData" value="Insert Record">
	<a class="btn" href="./index.php">Cancel</a><br>

</form>
