<a href="./"><h2>GO back to LPU FOLDER</h1></a>
	<h1>Hello World. Welome to PHP 101</h1>
<h2> Banuka Vidusanka </h2>
<?php


function f2()
{
	static $var2 = 0;
	$var2 += 5;
	echo "<br>inside func val: $var2";
}
function f3($param)
{
	
	echo "<br>inside func 2 value: $param";
}

f2();
f2();
f2();
echo"<br>";
f3(55);

$val5 = 10;
$val6 = 0;

echo"<br><br>";

$score = 10;
$age = 20;
echo 'Taking into account your age and score, you are: ',($age > 10 ? ($score < 80 ? 'behind' : 'above average') : ($score < 50 ? 'behind' : 'above average'));
echo"<br><br>";

$age = 20;
echo ($age>21)?'adult':'underage'; //correct
echo"<br><br>";
$legal = ($age>21)?'adult':'underage'; //correct
echo ($legal);
echo"<br><br>";
echo " ternary can only be used to pick/assign values<br>
($age>21) ? echo'adult'; : echo'underage'; //wrong";
echo"<br><br>";


$v1 = 4.67;
$v2 = 5;

echo($v1+$v2);
$v3 = 6;
$v3 = $v1+$v2;
echo($v3);
echo"<br><br>";
echo -(2-5);


?>

<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>