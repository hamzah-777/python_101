<?php
/*
Program by Banuka Vidusanka
*/

//make mysqli connection using external file.
require_once "1_dbconnect.php";
?>

<html>
<head>
  <title>Hackathon Club</title>
  <link rel="stylesheet" href="mycss.css" type="text/css">

</head><body>

  <?php    getheader(); //get header-html-code from 1_dbconnect.php file   ?>

  <div class="container-fluid p-3" style="background-image: url('./mysrc/lpubg.jpg'); min-height:100%" >
    <h2 class="d-flex justify-content-center tshadow2">Register now to take part in Coding Competitions organized by us!</h2>

    <marquee direction="down" behavior="alternate" height="500" style="position: fixed;  margin:auto; z-index: -9999">
      <marquee behavior="alternate" style="position: fixed; margin:auto;  z-index: -9999"><img src="./Facelogo1.png" style="opacity:0.2; height:8vw">
      </marquee>
  </marquee>

  <?php
//small code to check if table exisist------------ & promt to create it.
  if (! $conn->query ("DESCRIBE $tbname1" )) {
      //echo '<h2 style="color:red">Table: '.$tbname1." Does not exist</h2>\n";
      alert_danger("Table does not exist in database!");
      echo '<div><form method="POST" class="formclass" action="./2_formhandle.php"> <input type="submit" class="btn btn-warning" name="createTable" value="Create Table"> </form></div>';
    exit(); //stop from running further more.
}
?>

<!-- =========Form for user login & admins======= -->
<center><br>
    <form method="POST" class="formclass2">
      <span class="label1">Email ID: </span> 
      <input type="text" name="email" required><br><br>
      <span class="label1">Password: </span> 
      <input type="password" name="password" required><br><br>

      
      <button class="btn btn-warning" type="submit" formaction="./3_adminlogin.php" name="adminlogin">Admin Portal</button>

      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
      Register Now!</button>

      <button class="btn btn-primary" type="submit" formaction="./4_userlogin.php" name="userlogin">User Login</button>
      
  </form>
</center>

<!-- =========Form for registering for cometition======= -->
<!-- ================Modal start======================== -->
<div class="modal fade tshadow3" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content mymodal">
        <div class="modal-header">
          <h4 class="modal-title tshadow2" id="exampleModalLongTitle">Register for our Hackathon Events</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      
      <!-- ===================form start================= -->
      <form method="POST" class="formclass" action="./2_formhandle.php">
        <fieldset>
          <legend>Personal Data:</legend>
          <label for="" class="label1">Full Name*</label> 
          <input type="text" name="name" required placeholder="Enter name here" title="Name must be over 2 characters in length"><br>
          <label for="" class="label1">Email*</label> 
          <input type="email" name="email" required title="One registration per email allowed"><br>
          <label for="" class="label1">Password</label> 
          <input type="password" name="password" required placeholder="minimum 4 length" title="Minimum 4 characters required"><br>
          <label for="" class="label1">Birthday</label> 
          <input type="date" name="birthday" value="2004-01-01" title="Must be over the age of 16"><br>
          <label for="" class="label1">Institution</label> 
          <input type="text" name="institution" value="LPU Punjab"><br>
          <label for="" class="label1">Contact No</label> 
          <input type="number" name="contactno" placeholder="expect 8-9 digits" value="123456789" title="must be 8-9 characters"><br>
      </fieldset>

      <fieldset>
          <legend>Competition Details:</legend>
          <label for="hackathon" class="label1">Hackathon:</label> 
          <select id="hackathon" name="hackathon">
            <?php
                  //populate hackathon using array in 1_dbconnect.php
            foreach($hackathonarr as $i){
              echo "<option value='$i' >$i</option>";
          }
          ?>
      </select><br>
      
      <label for="" class="label1">Prefered Date:</label> 
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

<input type="submit" class="btn btn-success" name="submitData" value="Register for Event">
<input type="reset" class="btn btn-info" value="Reset Form">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
*Required Fields
</form>
<!-- ===================form end================= -->

</div>
</div>
</div>
</div>
<!-- ================Modal end======================== -->

<?php
//display data. as a table (limited columns)-----------------
$sql = "SELECT name, institution, hackathon, reg FROM $tbname1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    echo "<h3 class='tshadow2' >Registered Competitors so far:</h3>";
    echo "<center><div style='height: 60vh; overflow-y: auto; overflow-x: hidden; max-width:1000px'><table class='table table-info table-hover table-striped ' style='opacity: 0.8; max-width:1000px '>";
    echo "<tr class='bg-info'><th>Name</th><th>Institution</th><th>Hackathon</th><th>Registered On</th></tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . htmlentities($row["name"]). "</td><td>" . htmlentities($row["institution"]). "</td><td>" . htmlentities($row["hackathon"]). "</td><td>" . htmlentities($row["reg"]). "</td></tr>";
  }
  echo "</table></div></center>";
} else {
    alert_danger ("No Competitors registered yet.");
}

//Make use of array handling operations as required in CA3 question statement.
$sql = "SELECT institution, email, birthday, hackathon, h_date, h_venue FROM $tbname1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    //store each data in set of local arrays.
    $institutionlist = [];
    $emaillist = [];
    $agelist = [];
    $hackathonlist = [];
    $h_datelist = [];
    $h_venuelist = [];

    while($row = $result->fetch_assoc()) {
      array_push($institutionlist, htmlentities($row["institution"]));
      $domain = explode("@",htmlentities($row["email"])); //get domain part of each email address
      array_push($emaillist, $domain[1]);
      $age = (2020 - intval( substr( htmlentities($row["birthday"]) , 0, 4))); //calc age of user
      array_push($agelist, $age);
      array_push($hackathonlist, htmlentities($row["hackathon"]));
      array_push($h_datelist, htmlentities($row["h_date"]));
      array_push($h_venuelist, htmlentities($row["h_venue"]));

  }

	//make associative arrays with count of each occerence
	$institutioncount = array_count_values($institutionlist); 
	$emailcount = array_count_values($emaillist);
	$agecount = array_count_values($agelist);
	$hackathoncount = array_count_values($hackathonlist);
	$h_datecount = array_count_values($h_datelist);
	$h_venuecount = array_count_values($h_venuelist);

    //use sort functions on arrays.
    arsort($institutioncount); //Sorts an associative array in descending order, according to the value
    asort($emailcount); //Sorts an associative array in ascending order, according to the value
    ksort($agecount); //Sorts an associative array in ascending order, according to the key
    arsort($hackathoncount); //Sorts an associative array in descending order, according to the value
    ksort($h_datecount); //Sorts an associative array in ascending order, according to the key
    arsort($h_venuecount); //Sorts an associative array in descending order, according to the value

    //printing each data in tables...............
    echo "<br><div class='container'><div class='row'>";
    echo "<div class='col col-md-4 col-sm-6'>";
    echo "<h4 class='tshadow3'>Registrations per Institution</h4>";
    echo "<table class='table table-warning table-hover table-striped table-sm' style='opacity: 0.8; max-width:500px '>";
    echo "<tr class='bg-success'><th>Institution</th><th>Total Registered</th></tr>";
    foreach ($institutioncount as $k => $v){
      echo "<tr> <td>$k</td> <td>$v</td> </tr>";
  }
  echo "</table></div>";


  echo "<div class='col col-md-4 col-sm-6'>";
  echo "<h4 class='tshadow3'>Age Variation (sort by age)</h4>";
  echo "<table class='table table-warning table-hover table-striped table-sm' style='opacity: 0.8; max-width:500px '>";
  echo "<tr class='bg-info'><th>Age</th><th>Total Count</th></tr>";
  foreach ($agecount as $k => $v){
      echo "<tr> <td>$k</td> <td>$v</td> </tr>";
  }
  echo "</table></div>";


  echo "<div class='col col-md-4 col-sm-6'>";
  echo "<h4 class='tshadow3'>Email Domain Distribution <sup></sup></h4>";
  echo "<table class='table table-warning table-hover table-striped table-sm' style='opacity: 0.8; max-width:500px '>";
  echo "<tr class='bg-success'><th>Email Domain</th><th>Total Count</th></tr>";
  foreach ($emailcount as $k => $v){
      echo "<tr> <td>$k</td> <td>$v</td> </tr>";
  }
  echo "</table></div>";


  echo "<div class='col col-md-4 col-sm-6'>";
  echo "<h4 class='tshadow3'>Hackathon Popularity</h4>";
  echo "<table class='table table-warning table-hover table-striped table-sm' style='opacity: 0.8; max-width:500px '>";
  echo "<tr class='bg-info'><th>Institution</th><th>Total Registered</th></tr>";
  foreach ($hackathoncount as $k => $v){
      echo "<tr> <td>$k</td> <td>$v</td> </tr>";
  }
  echo "</table></div>";

  echo "<div class='col col-md-4 col-sm-6'>";
  echo "<h4 class='tshadow3'>Expected Attendence per day</h4>";
  echo "<table class='table table-warning table-hover table-striped table-sm' style='opacity: 0.8; max-width:500px '>";
  echo "<tr class='bg-success'><th>Competition Date</th><th>Total Registered</th></tr>";
  foreach ($h_datecount as $k => $v){
      echo "<tr> <td>$k</td> <td>$v</td> </tr>";
  }
  echo "</table></div>";

  echo "<div class='col col-md-4 col-sm-6'>";
  echo "<h4 class='tshadow3'>Expected Attendence per venue</h4>";
  echo "<table class='table table-warning table-hover table-striped table-sm' style='opacity: 0.8; max-width:500px '>";
  echo "<tr class='bg-info'><th>Event Venue</th><th>Total Registered</th></tr>";
  foreach ($h_venuecount as $k => $v){
      echo "<tr> <td>$k</td> <td>$v</td> </tr>";
  }
  echo "</table></div>";
  echo "</div></div>";
}

?>

</div>

<?php   getfooter(); //call function to get html-footer-code from 1_dbconnect.php  ?>


</body>
</html>