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

imagerectangle($image,40,40, 160,160, $yellow);
imagerectangle($image,60,60, 160,160, $yellow);

header("Content-Type: image/png");
imagepng($image);
?>