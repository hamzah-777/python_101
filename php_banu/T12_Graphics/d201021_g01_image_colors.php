<?php

$image = imagecreate(600, 400); //creates a canvas w x h

//color value can be decimal 0-55
// or hex value 0x00 - 0xFF

//first imagecolorallocate is by default set as BGCOLOR
$bgcol = imagecolorallocate($image, 255, 255, 255); //white

//any colors chosen after can be used to DRAW (RGB)
$black1 = imagecolorallocate($image, 0, 0, 0); //black
$red1 = imagecolorallocate($image, 255, 0, 0);
$green1 = imagecolorallocate($image, 0, 255, 0);
$blue1 = imagecolorallocate($image, 0, 0, 255);
$white1 = imagecolorallocate($image, 255, 255, 255);

//hex val for color
$blue2 = imagecolorallocate($image, 0x00, 0x00, 0xFF); //hex val
$green2 = imagecolorallocate($image, 0x00, 0x40, 0x00); //hex val


//draw rectangle filled w color //($image, x1, y1, x2, y2, color)
imagefilledrectangle($image,150,50,200,150, $green2); 
imagefilledrectangle($image,250,50,350,150, $red1); 
imagefilledrectangle($image,300,300,100,150, $blue1); 



header("Content-Type: image/png");

imagepng($image);