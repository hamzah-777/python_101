<?php echo "Hello there";
?>
<pre>

1. Create a table name Product
2. Create 5 relevant attributes
3. Insert 2 rows in the table.
4. Print the table data on browser screen
5. Perform update, delete and drop quesries.
6. Share the screen shot by 5:50 PM
</pre>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection-----------------
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("<h5>Connection failed: " . $conn->connect_error . "</h5>");
}
echo "<h5>Connected successfully </h5>";


//create table--------------------------
$sql = "CREATE TABLE Product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
p_name VARCHAR(30) NOT NULL,
p_brand VARCHAR(30) NOT NULL,
p_value INT(6) NOT NULL,
p_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "<h5>Table Product created successfully</h5>";
} else {
  echo "<h5>Table creating Error: " . $conn->error . "</h5>";
}


//insert some static data----------
$sql = "INSERT INTO Product (p_name, p_brand, p_value)
VALUES ('S7', 'Samsung', 2000)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Product (p_name, p_brand, p_value)
VALUES ('Apple 4i', 'Apple', 3000)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//small code to check if table exisist--------------
if ($conn->query ("DESCRIBE Product"  )) {
    echo "exist";
} else {
    echo "doesn't exist";
}


//display data. as a table
$sql = "SELECT * FROM Product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<table border='1'>";
		echo "<tr><th>ID</th><th>Product</th><th>Brand</th><th>Value</th><th>Time entered</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["p_name"]. "</td><td>" . $row["p_brand"]. "</td><td>" . $row["p_value"]. "</td><td>" . $row["p_date"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}












$conn->close();
?>


