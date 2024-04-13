<?php
/*
Program by Banuka Vidusanka
< 3_adminlogin.php >
This file contain the html code for user interface in Admin Portal.
after verifying user entered emailID & password, details of competition registered users will be visible to admin in the form of table.
admin also has the ability to give sql - DROP table command from here.
resources: w3school.com
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";
$admin_email = "root@localhost.com";
$admin_password = "php123";
$permissiongranted = false;

if( isset( $_POST['email'] ) && isset( $_POST['password'] )  ){
	$email = strtolower( $_POST['email'] );
	$password = $_POST['password'];
	if ( strcasecmp($email, $admin_email) === 0 && strcasecmp($password, $admin_password) === 0){
		$permissiongranted = true;
	}else{
		alertFunc("Admin credentials NOT Accepted!");
		header( 'refresh:0; url=index.php' ) ;		return;
	}
	
}else{
	alertFunc("Login credentials not found on POST.");
	header( 'refresh:0; url=index.php' ) ;	return;
}
?>

<html>
<head>
	<title>Admin Logged in as: Banuka</title>
</head>
<body>

	<?php    getheader(); //get header-html-code from 1_dbconnect.php file   ?>

	<div class="container-fluid p-4" style="min-height:100%; background-image: url('./mysrc/adminbg.jpg');" >
		<h1>Admin Portal. Logged in: <?= $email ?> </h1>
		<?php 

		if($permissiongranted){
			alert_success("Welcome Admin: Banuka Vidusanka");
	//display data. as a table-----------------
			$sql = "SELECT * FROM $tbname1";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
	  // output data of each row
				echo "<h4>Details of Registered Competitors:</h4>";
				echo "<table class='table table-info table-hover table-striped table-sm tbscroll1' style='display: block;  height: 60vh;  overflow: scroll;' >";
				//table-responsive
				echo "<thead><tr class='bg-info'> <th>ID</th> <th>Name</th> <th>Email</th> <th>Birthday</th> <th>Institution</th> <th>Contact No</th> <th>Date Registered</th> <th>IP Address</th> <th>Hackathon</th> <th>Prefered Date</th> <th>Prefered Venue</th> </tr></thead><tbody>";

				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . htmlentities($row["id"]). "</td><td>" . htmlentities($row["name"]). "</td><td>" .htmlentities($row["email"]). "</td><td>" .htmlentities($row["birthday"]). "</td><td>" .htmlentities($row["institution"]). "</td><td>" .htmlentities($row["contactno"]). "</td><td>" .htmlentities($row["reg"]). "</td><td>" .htmlentities($row["ip"]). "</td><td>" .htmlentities($row["hackathon"]). "</td><td>" .htmlentities($row["h_date"]). "</td><td>" . htmlentities($row["h_venue"]). "</td></tr>";
				}
				echo "</tbody></table>";
			} else {
				alert_danger("No Competitors registered yet.");
			}

		}



		if( isset($_POST['droptable']) && isset( $_POST['password'] )){

			unset($_POST['droptable']);
			$sql = "DROP TABLE $tbname1"; //sql statement to drop table

			if ($conn->query($sql) === TRUE) {
				alertFunc("Table dropped successfully");
			} else {
				alertFunc("$conn->error");
			}
			header( 'refresh:0; url=index.php' ) ;		return;
		}

		?>
		<center>
			<form method="POST" class="formclass2" >
				<h4>Drop Table along with all data.</h4>	
				<label for="" class="label1">Confirm Password*</label> 
				<input type='password' name='password' required>
				<br>
				<input type='hidden' name='email' value="<?= $email ?>">
				<a class="btn btn-warning" href="./sampledata.php"><i class="fa fa-database" aria-hidden="true"></i></a>
				<input class="btn btn-danger" type="submit" value="Drop Table" name="droptable">
				<a class="btn btn-success" href="index.php">Go Back</a>

			</form>
		</center>

	</div>

	<?php   getfooter(); //call function to get html-footer-code from 1_dbconnect.php  ?>

</body>
</html>