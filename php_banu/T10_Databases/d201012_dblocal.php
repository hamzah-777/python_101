<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<p>Enter data in to DB - simple prog</p>
<style type="text/css">
.label1 {
  display: inline-block;
  width: 90px;
}
</style>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("<h5>Connection failed: " . $conn1->connect_error . "</h5>");
}
echo "<h5>Connected successfully </h5>";

?>

<?

// sql to create table
/*
$sql = "CREATE TABLE table1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
C_Number INT(6) NOT NULL,
C_Desc VARCHAR(30) NOT NULL,
C_Solution VARCHAR(30),
C_Status VARCHAR(30),
rec_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table table1 created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/



if( isset($_POST['submitData'])){
	$C_Number = $_POST['C_Number'];
	$C_Desc = $_POST['C_Desc'];
	$C_Solution = $_POST['C_Solution'];
	$C_Status = $_POST['C_Status'];

var_dump($_POST);

$sql = "INSERT INTO table1 (C_Number, C_Desc, C_Solution, C_Status)
VALUES ($C_Number, '$C_Desc', '$C_Solution', '$C_Status')";

//$sql = "INSERT INTO table1 (C_Number, C_Desc, C_Solution, C_Status)
//VALUES (124, 'Data not updating', 'Restart PC', 'Issue not resolved')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

unset($_POST);
$_POST = array();

}

$conn->close(); //close connection
?>

<form method="POST">
	<span class="label1">C_Number</span> <input type="number" name="C_Number"><br>
	<span class="label1">C_Desc </span> <input type="text" name="C_Desc"><br>
	<span class="label1">C_Solution </span> <input type="text" name="C_Solution"><br>
	<span class="label1">C_Status </span> <input type="text" name="C_Status"><br>
	<input type="submit" name="submitData" value="Insert to DB"><br>
</form>


