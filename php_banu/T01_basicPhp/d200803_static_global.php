<a href="./"><h2>GO back to LPU FOLDER</h1></a>
	<h1>Hello World. Welome to PHP 101</h1>
<h2> Banuka Vidusanka </h2>
<?php
if (1 == 1) {
echo "We must have it!"; 	// semicolon required here
} 					// no semicolon required here

 ?>
 
<?php
	if (2 == 2) { echo "Rhyme? And Reason? "; }
	echo "<b>Hello, world</b>" 		
	// no semicolon required before closing tag
	?>

<?php
#shell style comment
// c++ comment
/* multi
line comments */
?>

<h3>2020-08-03</h3>

<?php
echo "<pre>Literals=
A literal is a data value that appears directly in a program
Identifiers=
In PHP, identifiers are used to name variables, functions, constants, and classes.
Keywords=
A word reserved by the language for its core functionality—you cannot 
give a variable, function, class, or constant the same name as 
a keyword. Case insensitive in PHP.
</pre>";

$var1 = 5; //global scope

function f1()
{
	global $var1; //access global variables within a function
	echo "<br>In function: $var1";
	$var1 = 10;
}
echo "<br>B4 func call: $var1";
f1();
echo "<br>After func call: $var1";

function f2()
{
	static $var2 = 0; //static variable retain value between function calls
	$var2 += 5;
	echo "<br>inside func val: $var2";

	$var3 = 7; // local scope - variable only accessible within function.
}

f2();
f2();
f2();
f2();

?>

<p>PHP has three different variable scopes: <br>
local <br>
global <br>
static</p>

<p>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</p>

<p>PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.</p>

<p>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. <br>
To do this, use the static keyword when you first declare the variable: <br>
The variable is still local to the function. but it retain value between func calls (works like a global variable)</p>

<?php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>



<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>