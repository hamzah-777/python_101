<a href="./"><h2>GO back to LPU FOLDER</h1></a>

<h1> Printing Strings</h1>

<ul>
<li>echo - allow printing many values at once
<li>print() - print only one value
<li>printf() - build formatted string by inserting values into a template
<li>print_r() - useful for debugging. it print contents of arrays, objects
<li>var_dump() - work similar to print_r()
</ul>

<?
$var1 = "Hello \n World<br>";
$var2 = "Sup!";
$arr1 = ["A","B","C"];
$arr2 = array("x","y","z");
echo $var1;
echo "Message found $var1";
echo "Message found \$var1   <br>"; //escape char used
echo "Message found " , $var1;
echo 'Message found $var1  <br>'; //single quote - no interpolation
echo "<hr>";
print($var1); //support only one value printing
printf("$var2 $var1");
print_r($var1);
echo "<hr>";

print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";
var_dump($arr1);
echo "<br>";
var_dump($arr2);
echo "<br>....";
echo "<hr>";
print("<pre>".var_dump($arr2)."</pre>");
echo "<br>";
print("<pre>".print_r($arr2,true)."</pre>");
echo "<hr>";

//use c style to format string
$string = 'Hello';
for ($i=0; $i < strlen($string); $i++) {
	printf("The %dth character is %s<br>", $i, $string[$i]);
}

?>

<h2>converting PHP newline to br in HTML - nl2br() </h2>

<?
$var3 = "Hello \nWonderful \nWorld <br>";
$var4 = <<< HDOC
Sup
Wonderful
Universe<br>
HDOC;

echo $var3;
echo $var4;
echo "<hr>";
echo nl2br($var3);
echo nl2br($var4);

?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>