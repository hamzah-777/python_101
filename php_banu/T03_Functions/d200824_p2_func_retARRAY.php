<a href="./"><h2>GO back to LPU FOLDER</h1></a>


<?
function f1($xyz){
	return ($xyz*$xyz);
}

echo "<br>".f1(5);


echo "<hr>";
function f2($a,$b){
	#function basically flip input
	return array($b,$a);
}

print_r( f2("abc","xyz") );
echo "<hr>";

var_dump( f2("123","654") );
echo "<hr>";

var_export(  f2("Ert","654" ) );
echo "<hr>";

$temparr = f2("Hello","World");
foreach ($temparr as $i){
	echo "$i: ";
}
echo "<hr>";

list ($one, $two) = f2("Hello","World");
echo "$one, $two "
?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>