<?php

$image = imagecreate(600, 400); //creates a canvas w x h

$bgcol = imagecolorallocate($image, 255, 255, 255); //white

//any colors chosen after can be used to DRAW (RGB)
$clr3 = imagecolorallocate($image, 0, 255, 255); //black
$clr2 = imagecolorallocate($image, 255, 0, 255);


//draw polygon
//imagepolygon(image, points[], num_points, color)
//$points1 = [100,100, 350,300, 200,100, 120,280, 100,100];
//ImagePolygon($image, $points1 , 5, $clr2);


$points1 = [80,220, 130,100, 160,160, 200,60, 200,150, 350,40, 190,330, 80,220 ];
ImagePolygon($image, $points1 , 7, $clr2);

//filled polygon
$points2 = [200,250, 150,150, 50,250, 200,250 ];
ImageFilledPolygon($image, $points2 , 4, $clr3);

header("Content-Type: image/png");

imagepng($image);