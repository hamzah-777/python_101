<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.11</i></h2>

<? 
$uidarray = array("S1234567","F1234567","P1234567","P123456732", "S1234563", "S12345");
?>

<h4>Welcome to loops</h4>
<xmp>
break; //break out of 1 loops (break 1; )
break 2; //break out of 2 loops
</xmp>
<h4>
<? 
$i = 0;
$j = 0;
while($i <10){
	$i++;
	while($j<10){
		$j++;
		echo "i = {$i} , j = {$j} <br>";
		if ($j == 7){
			break; //break out of 1 loops (break 1; )
		}
				
	}
	
}
echo "final i = {$i} , j = {$j} <br>";
echo "<hr><hr>";


$i = 0;

while($i <10){
	$i++;
	$j = 0;
	while($j<10){
		$j++;
		echo "i = {$i} , j = {$j} <br>";
		if ($j == 7){
			break 2; //break out of 2 loops
		}
				
	}
	
}
echo "final i = {$i} , j = {$j} <br>";
echo "<hr><hr>";

$i = 0;
$num = 0;

do {
	$i++;
}
while( $i < 10 );

echo ("Loop stopped at i = $i" );

echo "<hr><hr>";
 ?>
</h2>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>