<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$tbname1 = "iplogs";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo("$conn->connect_error");
	die("<h5>Connection failed: " . $conn->connect_error . "</h5>");
}

if (! $conn->query ("DESCRIBE $tbname1" )) {
	$sql = "CREATE TABLE iplogs (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	v_ip VARCHAR(30) UNIQUE NOT NULL,
	v_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	v_count int(6) NOT NULL
	)";

	if ($conn->query($sql) === TRUE) {
		echo("<br>Table created successfully.");
	} else {
		die("<br> $conn->error");
	}
}//check for exisitence of table

$ip = getenv("REMOTE_ADDR"); //get ip address of visitor

$sql = "
INSERT INTO $tbname1 (v_ip, v_count) 
VALUES ('$ip', 1)
ON DUPLICATE KEY UPDATE ;
";
if ($conn->query($sql) === TRUE) {
	  echo("New record created successfully");
	} else {
	  echo("$conn->error");
	}


if(isset($_POST['password'])){
	if($_POST['password']==="Banuka"){
		//results
		$sql = "SELECT * FROM $tbname1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table border='1'>";
				echo "<tr><th>ID</th><th>IP</th><th>Date-Time</th><th>Count</th></tr>";
		  while($row = $result->fetch_assoc()) {
		    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["v_ip"]. "</td><td>" . $row["v_date"].  "</td><td>" . $row["v_count"]. "</td></tr>";
		  }
		  echo "</table>";
		} else {
		  echo "<h4>No records found in table.</h4>";
		}
	}else{
		echo "<h4>Nothing to see here buddy<h4>";
	}
}



?>

<h1>Hello Stranger</h1>

<form method="POST">PW: <input type="text" name="password">
<input type="submit" name=""></form>