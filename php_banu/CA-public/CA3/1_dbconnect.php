<?php
/*
Program by Banuka Vidusanka
< 1_dbconnect.php >
This file contain DB connection code and few other resources that is used across other individual pages in the application. (code reuse & modularity)
*/

//Details of database to connect to, along with credentials
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


$tbname1 = "hackathontb"; //name of table to be used in application

//list of data for competitions
$hackathonarr = ['LPU Clash of Hackers', 'C++ Code Masters', 'HTML Design Fest', 'PHP Code Fiesta', 'Codeblocks Heroes'];
$h_datearr = ['2020-11-20 14:30:00', '2020-11-26 16:30:00', '2020-12-10 12:30:00'];
$h_venuearr = ['Phagwara College', 'LPU Main Hall', 'Delhi Library Hall'];

// Create mysqli connection-----------------
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	alertFunc("$conn->connect_error");
	die("<h5>Connection failed: " . $conn->connect_error . "</h5>");
}

//--------------------------------------------------------------
//---------- FOLLOWING FUNCTION DEFINITIONS are used and accessed by other pages 

//php function that calls a javascript - script that display "alert"
function alertFunc($msg){
  echo "<script type='text/javascript'>alert('$msg');</script>";
}

//function to call an alert using bootstrap
function alert_danger($msg){
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>$msg</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>Close &times;</span>
  </button></div>";
}

function alert_success($msg){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>$msg</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>Close &times;</span>
  </button></div>";
}

//----getheader() function contain simple html code to display header section... which is reused across 3 pages in app
function getheader(){
  echo '<header>
  <div class="container-fluid p-3 tshadow" style="background-image: url( \' ./mysrc/banner.jpg \' ); color:#fff;height:200px; background-size: cover">
  <h1><i class="fa fa-code" aria-hidden="true"></i> Hackathon Club</h1>
  <h5>We will help you to start participating in hackathons, upgrade your skills, find a team, and train together. </h5>
  <p>Register today to Join the Fun!</p>
  </div>
  </header>';

  echo '<!-- nav bar content ----------------------------->
  <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand" href="#"><i class="fa fa-code" aria-hidden="true"></i> Hackathon Club</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item active">
  <a class="nav-link" href="./"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="https://banukaknight.github.io/LPU-CAP917-Angular/CA1-Temp1"><i class="fa fa-newspaper-o" aria-hidden="true"></i> LPU News</a>
  </li>
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-code-fork" aria-hidden="true"></i> Upcoming Events
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

  global $hackathonarr; //access global array and use.
  foreach($hackathonarr as $i){
    echo   "<a class='dropdown-item' href='#'>$i</a>";
}

echo '  </div>
</li>
</ul>
<ul class="navbar-nav ml-auto">

<li class="nav-item active">
  <a class="nav-link" href="./"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout <span class="sr-only">(current)</span></a> </li>
<li class="nav-item active">
  <a href="https://banukaknight.github.io/" class="nav-link" title="Banuka Vidusanka"><i class="fa fa-github" aria-hidden="true"></i> About Developer</a></li>
</ul>
</div>
</nav>
<!-- end of navbar ------------------------------------>


<script>//--JS code for sticky navbar
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}</script>
';
}// end of getnavbar


//----getfooter() function contain simple html code to display footer section... which is reused across 3 pages in app
function getfooter() {
  echo '<footer class="page-footer font-small unique-color-dark" style="background-image: url( \' ./mysrc/banner2.jpg \' );  background-size: cover">
  <div style="background-color: #313131;">
  <div class="container">
  <div class="row py-4 d-flex align-items-center">
  <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
  <h6 class="mb-0 text-white">Connect with us through Social Media!</h6>
  </div>
  <div class="col-md-6 col-lg-7 text-center text-md-right">
  <a href="https://www.facebook.com/the.BK.rox/" class="fb-ic"> <i class="fa fa-facebook-f white-text mr-4"> </i> </a>
  <a href="https://twitter.com/thebkrox" class="tw-ic"> <i class="fa fa-twitter white-text mr-4"> </i> </a>
  <a href="https://github.com/banukaknight" class=""> <i class="fa fa-github white-text mr-4"> </i> </a>
  <a href="https://www.linkedin.com/in/banuka/" class="li-ic"> <i class="fa fa-linkedin white-text mr-4"> </i> </a>
  <a href="https://www.instagram.com/thebkrox/" class="ins-ic"> <i class="fa fa-instagram white-text"> </i> </a>
  </div>
  </div>
  </div>
  </div>

  <div class="container text-center text-md-left mt-5 tshadow3" >
  <div class="row mt-3">

  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  <h6 class="text-uppercase font-weight-bold">Hackathon Club</h6>
  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
  <p>We a student organization run by students and aluminai of Universities across Punjab State.</p>
  </div>

  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  <h6 class="text-uppercase font-weight-bold">Products</h6>
  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
  <p> <a href="https://byuzztpwqcpcgzmrhfjcpw-on.drv.tw/www.MusicSys2.com/">Music Sys</a> </p>
  <p> <a href="https://byuzztpwqcpcgzmrhfjcpw-on.drv.tw/www.hospital2.com/">Hospital Sys</a> </p>
  <p> <a href="http://banuka.epizy.com/Hangman_v3/">Hangman Game</a> </p>
  <p> <a href="https://banukaknight.github.io/LPU-CAP917-Angular/CA1-Temp2">Resturent Sys</a> </p>
  </div>

  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  <h6 class="text-uppercase font-weight-bold">Useful links</h6>
  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
  <p> <a href="https://banukaknight.github.io/">Your Account</a> </p>
  <p> <a href="https://github.com/banukaknight">Become an Affiliate</a> </p>
  <p> <a href="https://www.youtube.com/thebkrox">Subscribe</a> </p>
  <p> <a href="https://www.instagram.com/thebkrox/">Reach out</a> </p>

  </div>
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  <!-- Links -->
  <h6 class="text-uppercase font-weight-bold">Contact</h6>
  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
  <p> <i class="fa fa-home mr-3"></i> Galle, Sri Lanka</p>
  <p> <i class="fa fa-envelope mr-3"></i> thebkrox@gmail.com</p>
  <p> <i class="fa fa-phone mr-3"></i> + 01 454 567 88</p>
  <p> <i class="fa fa-print mr-3"></i> + 01 787 567 89</p>
  </div>
  </div>
  </div>

  <div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://github.com/banukaknight"> github.com/banukaknight</a>
  </div>
  </footer>';
}//end of getfooter


?>

<!-- include bootstrap & css links that will be used across the application--> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="mycss.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
