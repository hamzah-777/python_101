<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.19</i></h2>

<h4>Welcome to function</h4>
<xmp>
</xmp>
<hr>

<?php

 $x = 5;

function add1() {
    global $x;
	 $x += 1;
	 echo $x,": is x inside func<br>";
}
add1();
echo $x,": is x outside func<br><br>";


// $y = 5;
// function add2(){
// 	$y += 2;  //undefined variable. cannot access
// 	echo $y, ": is y inside func<br>";
// }
// add2();
// echo $y,": is y outside func<br><br>";



?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>