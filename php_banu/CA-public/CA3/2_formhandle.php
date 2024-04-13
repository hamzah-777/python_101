<?php
/*
Program by Banuka Vidusanka
< 2_formhandle.php >
This file contain mainly code to deal with FORM data submitted by user
file will respond to POST methods from FORM IMPUTS: createTable  & submitdata
The file also implement string handling operations to make sure user input abide by specifications
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";

if( isset($_POST['createTable']) ){

	//create table------------ SQL command
	$sql = "CREATE TABLE $tbname1 (
	id INTEGER NOT NULL AUTO_INCREMENT KEY,
	name VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL UNIQUE,
	password VARCHAR(40) NOT NULL,
	birthday VARCHAR(40),
	institution VARCHAR(40),
	contactno INT(12),
	reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	ip VARCHAR(30),
	hackathon VARCHAR(40),
	h_date VARCHAR(40),
	h_venue VARCHAR(40),
	INDEX(email)
) ENGINE=InnoDB CHARSET=utf8;";

	//running the SQL command and attempt to create the table.
if ($conn->query($sql) === TRUE) {
	alertFunc("Table $tbname1 created successfully.");
} else {
	alertFunc("$conn->error");
}
header( 'refresh:0; url=index.php' ) ;	return;



}else if( isset($_POST['submitData']) ){
	//apply string handling functions to prepare user input data
	$temp_name = preg_replace("/[^A-Za-z ]/", '', $_POST['name']); //remove non-alphabet char
	$name = ucwords( trim( $temp_name ) ); //capitalize 1st letter of each word & trim
	$email = strtolower( trim( $_POST['email'] ) );
	$password = trim( $_POST['password'] );
	$birthday = $_POST['birthday'];
	$temp_institution = preg_replace("/[^A-Za-z ]/", '', $_POST['institution']);
	$institution = strtoupper( trim( $temp_institution ) );
	$contactno = (int)$_POST['contactno'] ;

	$ip = getenv("REMOTE_ADDR"); //get ip address of visitor

	$hackathon = $_POST['hackathon'];
	$h_date = $_POST['h_date'];
	$h_venue = $_POST['h_venue'];

	unset($_POST['submitData']);


	//using string handling operations to check user input before updating DB
	if( ( strlen($password) < 2) || (strlen($password) > 40)){
		alertFunc("Password must be 2-40 length");
		header( 'refresh:0; url=index.php' ); return;
	}else if( (strlen($name) < 5) || (strlen($password) > 40)){
		alertFunc("Name must be minimum 2 characters long");
		header( 'refresh:0; url=index.php' ); return;
	}else if( ( strlen($contactno) < 8) || ( strlen($contactno) > 9) ){
		alertFunc("Mobile number must be between 8-9 digit length");
		header( 'refresh:0; url=index.php' ); return;
	}else if( (2020 - intval( substr($birthday, 0, 4))) < 16 ){
		alertFunc("You must be of age 16 or above to register for an event.");	
		header( 'refresh:0; url=index.php' ); return;
	}else if( (strlen($email) > 40)){
		alertFunc("Email over length 40 is not accepted!");
		header( 'refresh:0; url=index.php' ); return;
	}else if( (strlen($institution) > 40)){
		alertFunc("Institution over length 40 is not accepted!");
		header( 'refresh:0; url=index.php' ); return;
	}
	

	//---Insert data into table --- Normal SQL command
	//$sql = "INSERT INTO $tbname1 (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('$name', '$email', '$password', '$birthday', '$institution', $contactno, '$ip', '$hackathon', '$h_date', '$h_venue');";

	//---IMPLEMENT SQL-INJECTION PREVENTION---------------
	$sql = $conn->prepare("INSERT INTO $tbname1 (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
	$sql->bind_param("sssssissss", $name, $email, $password, $birthday, $institution, $contactno, $ip, $hackathon, $h_date, $h_venue);

	// $sql = "INSERT INTO hackathontb (name, email, password, birthday, institution, contactno, ip, hackathon, h_date, h_venue) VALUES ('Banu','abc2@yoo.com','123','2020-02-02','LPU', 342342352, '342-432-423', 'Hackyorrr', '2020-01-03', 'LPU AUditorim');";
	//echo "<pre> $sql </pre>" ; //for testing purpose

	//if ($conn->query($sql) === TRUE) {
	if ($sql->execute() === TRUE) {
		alertFunc("Registration Successful!");
	}else if($conn->errno == 1062){
		alertFunc("Email address already registered!");
	}else{
		echo "$conn->error";
		alertFunc("create err?? $conn->error");
	}
	header( 'refresh:0; url=index.php' ); return;

}else{
	alertFunc("No POST Data found. Redirecting...");
	header( 'refresh:0; url=index.php' ); return;
}

?>