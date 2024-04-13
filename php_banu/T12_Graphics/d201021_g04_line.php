<?php

$image = imagecreate(600, 500); //creates a canvas w x h

$bgcol = imagecolorallocate($image, 255, 255, 255); //white

//any colors chosen after can be used to DRAW (RGB)
$black1 = imagecolorallocate($image, 0, 0, 0); //black
$red1 = imagecolorallocate($image, 255, 0, 0);
$green1 = imagecolorallocate($image, 0, 255, 0);
$blue1 = imagecolorallocate($image, 0, 0, 255);
$white1 = imagecolorallocate($image, 255, 255, 255);
$yellow1 = imagecolorallocate($image, 255, 255, 0);
$purple1 = imagecolorallocate($image, 255, 0, 255);
$aqua1 = imagecolorallocate($image, 0, 255, 255);

//draw line (image, x1,y1 , x2,y2 , color-chose)
//imageline(image, x1, y1, x2, y2, color)
imageLine($image, 100,100, 200,200, $blue1);
imageLine($image, 100,200, 200,100, $red1);

//imagedashedline(image, x1, y1, x2, y2, color)
//draw dashed line
imagedashedline($image, 100, 200, 200, 300, $purple1);
imagedashedline($image, 200, 200, 100, 300, $aqua1);

header("Content-Type: image/png");

imagepng($image);