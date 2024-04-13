<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<h2>Database connection - using MySQLi</h2>

<pre>PHP 5 and later can work with a MySQL database using:
MySQLi extension (the "i" stands for improved)
PDO (PHP Data Objects)
Earlier versions of PHP used the MySQL extension. However, this extension was deprecated in 2012.</pre>

<h4>(MySQLi Object-Oriented) WAY</h4>
<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn1 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn1->connect_error) {
	  die("<br>Connection failed: " . $conn1->connect_error);
	  
	  // echo "<br> error msg: ". $conn1->connect_error;
	  // echo "<br> error no : ". $conn1->connect_errno;
	  // exit();
	}
	echo "<br>Connected successfully OO-way<br>";
	
	$conn1->close(); //close connection
?>


<h4>(MySQLi Procedural) WAY</h4>
<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn2 = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn2) {
	  die("<br>Connection failed: " . mysqli_connect_error());
	}
	echo "<br>Connected successfully";

	mysqli_close($conn2); //close connection
?>

<p>PHP die("msg here") function print a message and terminates current script.</p>
<p>insted i can use exit(); function aswell. so echo mesg first then call exit(); </p>