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
$font = './mysrc/myfont.ttf';
$font2 = './mysrc/myfont2.ttf';
date_default_timezone_set('Asia/Kolkata'); //set timezone to india/asia
$datetime = date("Y-m-d H:i:s"); //get current time of calling function
//---------- label print
imagettftext($image, 30, 0, 110, 340, $yellow, $font2, 'Reg ID:');
imagettftext($image, 20, 0, 110, 380, $yellow, $font2, 'Name:');
imagettftext($image, 20, 0, 110, 420, $yellow, $font2, 'Birthday:');
imagettftext($image, 20, 0, 110, 460, $yellow, $font2, 'Email:');

imagettftext($image, 20, 0, 110, 560, $aqua, $font2, 'Event Name:');
imagettftext($image, 20, 0, 110, 600, $aqua, $font2, 'Date of Event:');
imagettftext($image, 20, 0, 110, 640, $aqua, $font2, 'Venue Held:');
imagettftext($image, 20, 0, 110, 680, $white, $font2, 'Pass Printed @:');
//--------------- data passed to finction print
imagettftext($image, 30, 0, 280, 340, $green, $font, $id);
imagettftext($image, 20, 0, 280, 380, $green, $font, $name);
imagettftext($image, 20, 0, 280, 420, $green, $font, $birthday);
imagettftext($image, 20, 0, 280, 460, $green, $font, $email);

imagettftext($image, 20, 0, 350, 560, $green, $font, $hackathon);
imagettftext($image, 20, 0, 350, 600, $green, $font, $h_date);
imagettftext($image, 20, 0, 350, 640, $green, $font, $h_venue);
imagettftext($image, 15, 0, 350, 680, $white, $font, $datetime);

header("Content-Type: image/png");
imagepng($image,"savepass.png");
//header( 'refresh:0; url=index.php' ) ;  return;
imagepng($image);