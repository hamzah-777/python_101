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

$sql = "SELECT * FROM $tbname1 WHERE id=$p_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row === null) {
	alertFunc("Record not found");
	header( 'refresh:0; url=index.php' ) ;
	return;
}


if ( isset($_POST['submitData']) && isset($_POST['p_id'])){
	$p_name = $_POST['p_name'];
	$p_brand = $_POST['p_brand'];
	$p_value = $_POST['p_value'];
	unset($_POST['submitData']);


	$sql = "UPDATE $tbname1 SET p_name ='$p_name', p_brand='$p_brand', p_value='$p_value'
	WHERE id=$p_id";

	if ($conn->query($sql) === TRUE) {
	  alertFunc("Record updated successfully");
	} else {
	  alertFunc("$conn->error");
	}
	header( 'refresh:0; url=index.php' ) ;
	return;

}

// $stmt = $pdo->prepare("SELECT * FROM users where user_id = :xyz");
// $stmt->execute(array(":xyz" => $_GET['user_id']));
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// if ( $row === false ) {
//     $_SESSION['error'] = 'Bad value for user_id';
//     header( 'Location: index.php' ) ;
//     return;
// }

$p_name = $row['p_name'];
$p_brand = $row['p_brand'];
$p_value = $row['p_value'];

?>
<html>
<head>
  <title>ProductSys by Banuka</title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head><body>
<h1>Product Management - CRUD APP by <i>Banu</i></h1>
<h2>Update Record</h2>
<form method="POST" class="formclass">
	<span class="label1">Product Name</span> <input type="text" value="<?= $p_name ?>" name="p_name" required><br>
	<span class="label1">Product Brand </span> <input type="text" value="<?= $p_brand ?>" name="p_brand" required><br>
	<span class="label1">Product Value </span> <input type="number" value="<?= $p_value ?>" name="p_value" required><br><br>
	<input type="hidden" name="p_id" value="<?= $p_id ?>">
	<input type="submit" name="submitData" value="Update Record">
	<a class="btn" href="./index.php">Cancel</a><br>

</form>

