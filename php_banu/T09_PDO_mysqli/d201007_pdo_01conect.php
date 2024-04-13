<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<h2>Database connection - using PDO</h2>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

#make connection only
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null; //close db connection
?>