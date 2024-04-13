<?php
/*
Program by Banuka Vidusanka
resources: w3school.com
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";

// could not make this work.---------
// function geterror(){
// 	echo "Errors checking";
// 	if ( isset($_POST['error']) ) {
// 	    echo '<p style="color:red">'.$_POST['error']."</p>\n";
// 	    unset($_POST['error']);
// 	}
// 	if ( isset($_POST['success']) ) {
// 	    echo '<p style="color:green">'.$_POST['success']."</p>\n";
// 	    unset($_POST['success']);
// 	}
// }//end func geterror

?>

<html>
<head>
  <title>ProductSys by Banuka</title>
	<link rel="stylesheet" href="mycss.css" type="text/css">
</head><body>
<h1>Product Management - CRUD APP by <i>Banu</i></h1>
<h2>CAP525 - PHP Development - date: 2020-10-19</h2>

<marquee direction="down" behavior="alternate" height="500" style="position: fixed;  margin:auto; z-index: -9999">
  <marquee behavior="alternate" style="position: fixed; margin:auto;  z-index: -9999"><img src="./Facelogo1.png" style="opacity:0.2; height:8vw">
  </marquee></marquee>


<?php

//small code to check if table exisist--------------
if (! $conn->query ("DESCRIBE $tbname1" )) {
    echo '<p style="color:red">Table: '.$tbname1." Does not exist</p>\n";
    echo '<a class="btn" href="./2_createtable.php">Create Table </a>';
    exit();
}

//display data. as a table-----------------
$sql = "SELECT * FROM $tbname1";
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
  echo "<h4>No records found in table. Please insert data.</h4>";
}

echo '<a class="btn" href="./3_insertrecord.php">Insert Record</a>';
echo '<a class="btn" href="./6_droptable.php">Drop Table</a><br><br>';


?>


<form method="POST" class="formclass">
	<span class="label1">Product ID: </span> <input type="number" name="p_id" required><br><br>

  <button class="btn" type="submit" formaction="./5_deleterecord.php" name="deleterecord">Delete Record</button>
  <button class="btn" type="submit" formaction="./4_updaterecord.php" name="updaterecord">Update Record </button>


</form>
