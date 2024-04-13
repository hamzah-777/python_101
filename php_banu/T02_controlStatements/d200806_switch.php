<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.06</i></h4>
<?php

$uid = "F2444367";

echo "<h2>";

if (strlen($uid)==5)
{
	echo "<br>Welcome faculty";
}else if (strlen($uid)==8)
{
	echo "<br>Welcome student";
}else{
	echo "<br>check ID again";
}
	
	$newchar = substr($uid, 0,1);
	echo $newchar;


if (substr($uid, 0,1) == "F"){
	echo "<br>Faculty";
}

if(strpos($uid, "F") === 0){
	echo "<br>Facultyyy";
} 


$uid = "F2443436";
$idlen = strlen($uid);

switch($idlen)
{
	case($idlen == 5): 
	echo "<br>too short";
	break;
	case($idlen == 8): 
	echo "<br>Facultyeee";
	break;
	default:
	echo "<br>error";
	break;
	
	
}







?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>