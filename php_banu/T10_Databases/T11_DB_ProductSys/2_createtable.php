<?php
/*
Program by Banuka Vidusanka
resources: w3school.com
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";

//create table--------------------------
$sql = "CREATE TABLE Product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
p_name VARCHAR(30) NOT NULL,
p_brand VARCHAR(30) NOT NULL,
p_value INT(6) NOT NULL,
p_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	alertFunc("Table created successfully.");
} else {
	alertFunc("$conn->error");
}

header( 'refresh:0; url=index.php' ) ;
return;