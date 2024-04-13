<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.19</i></h2>

<h4>Welcome to function</h4>
<xmp>
</xmp>
<hr>

<?php
$a = 8;
function meth1() {
    $a = 5;
	function meth2(){
		global $a;
		$a += 2;
		echo $a, " : a in meth2<br>";
	}
}
meth1();
meth2();
echo $a, " : a after meth2<br>";
?>
<br>
<?php
//calc salary
function promotion(){
	static $mysalary=10000;
	$mysalary = $mysalary + ($mysalary*0.1);
	return $mysalary;
}
	
for($i =1; $i<=5; $i++) {
	echo "<br>year $i salary: ".promotion();
}

?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>