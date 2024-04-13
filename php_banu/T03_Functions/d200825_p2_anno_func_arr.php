<a href="./"><h2>GO back to LPU FOLDER</h1></a>

<?

#create array of functions and assign it to obj/value
$calc = array(
	function($v1,$v2) {
		echo "<br>Sum of $v1 & $v2 is : ".($v1+$v2);
	},
	function($v1,$v2) {
		echo "<br>Deduct of $v1 & $v2 : ".($v1-$v2);
	},
	function($v1,$v2) {
		echo "<br>Multiply of $v1 by $v2 : ".($v1*$v2);
	},
	function($v1,$v2) {
		echo "<br>Divide of $v1 by $v2 : ".($v1/$v2);
	}

);

$choice = rand(0,3); #randome integer between min&max

echo "<br>Random func call :";
$calc[$choice] (65,21);


echo "<br><br>Call multi Func index 2 :";
$calc[2](5,4);
?>


<br><br> <button onClick="window.location.reload();">Refresh Page </button>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>