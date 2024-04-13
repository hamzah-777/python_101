<?php
$id = htmlentities($_GET['id']);
$name = htmlentities($_GET['name']);
$birthday = htmlentities($_GET['birthday']);
$email = htmlentities($_GET['email']);
$hackathon = htmlentities($_GET['hackathon']);
$h_date = htmlentities($_GET['h_date']);
$h_venue = htmlentities($_GET['h_venue']);


$image = @imagecreatefrompng('passtemp.png');

$bgcol = imagecolorallocate($image, 255, 255, 255); //white
$green = imagecolorallocate($image, 0, 255, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$yellow = imagecolorallocate($image, 255, 255, 0);
$aqua = imagecolorallocate($image, 0, 255, 255);

//imagettftext(image, size, angle, x, y, color, fontfile, text)
//imagestring(image, font, x, y, string, color)

date_default_timezone_set('Asia/Kolkata'); //set timezone to india/asia
$datetime = date("Y-m-d H:i:s"); //get current time of calling function
//---------- label print
imagestring($image, 5, 140, 340, 'Reg ID:', $yellow);
imagestring($image, 5, 140, 380, 'Name:', $yellow);
imagestring($image, 5, 140, 420, 'Birthday:', $yellow);
imagestring($image, 5, 140, 460, 'Email:', $yellow );

imagestring($image, 5, 140, 560, 'Event Name:', $aqua );
imagestring($image, 5, 140, 600, 'Date of Event:', $aqua );
imagestring($image, 5, 140, 640, 'Venue Held:', $aqua );
imagestring($image, 5, 140, 520, 'Pass Printed @:', $white );
//--------------- data passed to finction print
imagestring($image, 5, 280, 340, $id,$green );
imagestring($image, 5, 280, 380, $name,$green );
imagestring($image, 5, 280, 420, $birthday,$green );
imagestring($image, 5, 280, 460, $email,$green );

imagestring($image, 5, 350, 560, $hackathon,$green );
imagestring($image, 5, 350, 600, $h_date,$green );
imagestring($image, 5, 350, 640, $h_venue,$green );
imagestring($image, 5, 350, 520, $datetime,$white );

header("Content-Type: image/png");
imagepng($image,"savepass.png");
//header( 'refresh:0; url=index.php' ) ;  return;
imagepng($image);