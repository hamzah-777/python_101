<?php
/*
Program by Banuka Vidusanka
< 4_userlogin.php >
This file contains the HTML user interface for logged in user. it specify the data stored in database under their email. it also have form to update details about the competition they have registeed.
Also the option to delete record from database (deregister from competition)
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";
// echo "<pre>";
// var_dump($_POST);  //for testing code only
// echo "</pre>";

if( (isset( $_POST['email'] )) && (isset( $_POST['password'] )) ) {
	$email = strtolower( trim( $_POST['email'] ) );
	$password = trim ( $_POST['password'] );
}else{
	alertFunc("Email info not found on POST.");
	header( 'refresh:0; url=index.php' ) ;	return;
}

//----normal sql statement
// $sql = "SELECT * FROM $tbname1 WHERE email='$email'";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();

//----prepared sql statment to avoid sql-injection
$sql = $conn->prepare("SELECT * FROM $tbname1 WHERE email= ? ");
$sql->bind_param("s", $email);
$sql->execute();
$result = $sql->get_result();
$row = $result->fetch_assoc();

//authenticate user by checking email & password
if ( $row === null ) {
	alertFunc("Record matching $email not found");
	header( 'refresh:0; url=index.php' ) ;	return;
}else if( htmlentities($row['password']) !== $_POST['password']){
	alertFunc("Password Not Matched. Please try again.");
	header( 'refresh:0; url=index.php' ) ;	return;	
}

//code to delete a record from table
if ( isset($_POST['deregister']) && isset($_POST['email']) ){

	//---delete record from table normal sql statement
	//$sql = "DELETE FROM $tbname1 WHERE email='$email'";

	//---prepared sql statment to avoid sql-injection
	$sql = $conn->prepare("DELETE FROM $tbname1 WHERE email= ? ");
	$sql->bind_param("s", $email);

	//if ($conn->query($sql) === TRUE) {
	if ($sql->execute() === TRUE) {
		alertFunc("Record deleted successfully");
	} else {
		alertFunc("$conn->error");
	}
	header( 'refresh:0; url=index.php' ) ;	return;
}

//code to update a record regardin user competition details.
if ( isset($_POST['updateData']) && isset($_POST['email']) ){
	$hackathon = $_POST['hackathon'];
	$h_date = $_POST['h_date'];
	$h_venue = $_POST['h_venue'];
	unset($_POST['updateData']);

	//--- regular sql statment to update table row
	//$sql = "UPDATE $tbname1 SET  hackathon='$hackathon', h_date='$h_date', h_venue='$h_venue'	WHERE email='$email';";

	//---- prepared sql statment to avoid sql-injection
	$sql = $conn->prepare("UPDATE $tbname1 SET hackathon= ?, h_date= ?, h_venue= ?	WHERE email= ?");
	$sql->bind_param("ssss", $hackathon, $h_date, $h_venue, $email);

	//if ($conn->query($sql) === TRUE) {
	if ($sql->execute() === TRUE) {
		alertFunc("Record updated successfully");
	} else {
		alertFunc("$conn->error");
	}
	header( 'refresh:0; url=index.php' ) ;	return;
}

//store date from db locally to display to user
$id = htmlentities($row['id']);
$name = htmlentities($row['name']);
$email = htmlentities($row['email']);
$password = htmlentities($row['password']);
$birthday = htmlentities($row['birthday']);
$institution = htmlentities($row['institution']);
$contactno = htmlentities($row['contactno']);
$hackathon = htmlentities($row['hackathon']);
$h_date = htmlentities($row['h_date']);
$h_venue = htmlentities($row['h_venue']);

$dataarrayforimage = compact("id","name","birthday","email","hackathon","h_date","h_venue");
$queryforimage = http_build_query($dataarrayforimage);
//header( "refresh:0; url=5_makepass.php?$queryforimage" ) ;	return;

//create image - competition entry pass
//getpassimage($id, $name, $birthday, $email, $hackathon, $h_date, $h_venue);
?>
<html>
<head>
	<title>User Logged in: <?= $name ?></title>
</head><body>

	<?php    getheader(); //get header-html-code from 1_dbconnect.php file   ?>

	<div class="container-fluid p-5" style="min-height:100%; background-image: url('./mysrc/userbg.jpg'); background-repeat: repeat; background-size: 100%;" >
		<h1 class=" text-white tshadow2">Competitor Details</h1>
		<!-- ========== display details of competitor in a table ================= -->
		<table class="table table-dark table-hover table-striped" style='opacity: 0.9;'>
			<tr><th class='bg-danger' colspan="2"><i>Personal Details</i></th></tr>
			<tr><th>Full Name</th><td><?= $name ?></td></tr>
			<tr><th>Email</th><td><?= $email ?></td></tr>
			<tr><th>Birthday</th><td><?= $birthday ?></td></tr>
			<tr><th>Institution</th><td><?= $institution ?></td></tr>
			<tr><th>Contact No</th><td><?= $contactno ?></td></tr>
			<tr><th class='bg-danger' colspan="2"><i>Registered Competition Details</i></th></tr>
			<tr><th>Registration ID</th><td><?= $id ?></td></tr>
			<tr><th>Hackathon</th><td><?= $hackathon ?></td></tr>
			<tr><th>Prefered Date</th><td><?= $h_date ?></td></tr>
			<tr><th>Prefered Venue</th><td><?= $h_venue ?></td></tr>

		</table>

		<div class="row">
			<div class="col-md-6">
				<center>
					<form method="POST" class="formclass3 tshadow2" ">       
						<fieldset>
							<legend>Update Competition Details:</legend>
							<label for="hackathon" class="label1">Hackathon</label> 
							<select id="hackathon" name="hackathon" value="<?= $hackathon ?>" >
								<?php
                  //populate hackathon using array in 1_dbconnect.php
								foreach($hackathonarr as $i){
									echo "<option value='$i' >$i</option>";
								}
								?>
							</select><br>
							
							<label for="" class="label1">Prefered Date</label> 
							<select id="h_date" name="h_date">
								<?php
                  //populate h_date using array in 1_dbconnect.php
								foreach($h_datearr as $i){
									echo "<option value='$i' >$i</option>";
								}
								?>
							</select><br>

							<label for="h_venue" class="label1">Prefered Venue:</label><br> 
							<div class="ml-5">
								<?php
                  //populate h_venue using array in 1_dbconnect.php
								foreach($h_venuearr as $i){
									echo "<input type='radio' id='$i' name='h_venue' value='$i' required checked>
									<label for='$i'>$i</label><br>";
								}
								?>
							</div>

						</fieldset>
						<input type='hidden' name='email' value="<?= $email ?>">
						<input type='hidden' name='password' value="<?= $password ?>">
						<div class="btn-group " role="group">
							<input type="submit" class="btn btn-info" name="updateData" value="Update Record" title="Update Competition data">
							<input type="submit" class="btn btn-danger" name="deregister" value="Deregister" title="Remove from Competition">
						</div><br>
						<div class="btn-group " role="group">
							<a class="btn btn-success" href="./index.php" title="Go back to Home Page">Go Back</a>
							<a class="btn btn-warning" target="_BLANK" href="5_makepass.php?<?=$queryforimage?>">Generate Pass</a>
						</div>
						<br>

					</form></center>
					<p>Click "Generate Pass & Login Again to view your Competition entry pass.</p>
				</div>
				<div class="col-md-6">
					<img src="savepass.png" class="img-fluid img-thumbnail" style="max-width:450px;">
				</div>
			</div>
			


		</div>

		<?php   getfooter(); //call function to get html-footer-code from 1_dbconnect.php  ?>

	</body></html>