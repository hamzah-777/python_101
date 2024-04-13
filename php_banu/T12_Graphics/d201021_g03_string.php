<?php
   $img = imagecreate(500, 300);
   $bgcolor = imagecolorallocate($img, 150, 200, 180);
   $fontcolor = imagecolorallocate($img, 120, 60, 200);
   //imagestring(image, font, x, y, string, color)
   imagestring($img, 1, 150, 20, "Demo Text1", $fontcolor);
   imagestring($img, 2, 150, 40, "Demo Text2", $fontcolor);
   imagestring($img, 3, 150, 60, "Demo Text3", $fontcolor);
   imagestring($img, 4, 150, 80, "Demo Text4", $fontcolor);
   imagestring($img, 5, 150, 100, "Demo Text5", $fontcolor);
   header("Content-Type: image/png");
   imagepng($img);
   imagedestroy($img);