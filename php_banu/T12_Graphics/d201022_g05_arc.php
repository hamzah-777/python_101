<?php

$image = imagecreate(600, 400); //creates a canvas w x h

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

//draw rectangle outline only
//ImageArc(image, center_x, center_y, width, height, start, end, color);
ImageArc($image, 200,200, 100, 100,0,360, $green1);
ImageArc($image, 200,200, 180, 180,0,360, $blue1);
ImageArc($image, 200,200, 140, 140,0,360, $aqua1);



header("Content-Type: image/png");

imagepng($image);