<?php
$image = @imagecreatefrompng('pass.png');

$bgcol = imagecolorallocate($image, 255, 255, 255); //white
$black = imagecolorallocate($image, 0, 0, 0); //black
$red = imagecolorallocate($image, 255, 0, 0);
$green = imagecolorallocate($image, 0, 255, 0);
$blue = imagecolorallocate($image, 0, 0, 255);
$white = imagecolorallocate($image, 255, 255, 255);
$yellow = imagecolorallocate($image, 255, 255, 0);
$purple = imagecolorallocate($image, 255, 0, 255);
$aqua = imagecolorallocate($image, 0, 255, 255);


//imagestring(image, font, x, y, string, color);
//imagettftext(image, size, angle, x, y, color, fontfile, text)


$font = 'myfont.ttf';
$font2 = 'myfont2.ttf';
$text1 = 'Reg ID:';
$text1 = 'Reg ID:';
$text1 = 'Reg ID:';


imagettftext($image, 30, 0, 110, 340, $yellow, $font, 'Reg ID:');
imagettftext($image, 30, 0, 110, 380, $yellow, $font, 'Name:');
imagettftext($image, 30, 0, 110, 420, $yellow, $font, 'Birthday:');
imagettftext($image, 30, 0, 110, 460, $yellow, $font, 'Email:');

imagettftext($image, 30, 0, 110, 560, $aqua, $font2, 'Event Name:');
imagettftext($image, 20, 0, 110, 600, $aqua, $font2, 'Date of Event:');
imagettftext($image, 20, 0, 110, 640, $aqua, $font2, 'Venue Held:');
//---------------

imagettftext($image, 30, 0, 350, 340, $green, $font, 'Reg ID2222222:');
imagettftext($image, 30, 0, 350, 380, $green, $font, 'Name:');
imagettftext($image, 30, 0, 350, 420, $green, $font, 'Birthday:');
imagettftext($image, 30, 0, 350, 460, $green, $font, 'Email:');

imagettftext($image, 30, 0, 350, 560, $red, $font2, 'Event Name:');
imagettftext($image, 20, 0, 350, 600, $red, $font2, 'Date of Event:');
imagettftext($image, 20, 0, 350, 640, $red, $font2, 'Venue Held:');


header("Content-Type: image/png");
imagepng($image,"savepass.png");
?>