<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.12</i></h2>

<h4>Welcome to Quizz</h4>
<xmp>
</xmp>
<hr>

<?
foreach([0,1,2,3,4,5] as $i){

echo ("$i <br>");
}


for ($i = 0; $i < 10; $i++){
	if ($i == 7){
		goto finish1;
		//continue;
		//break;
		//die("program ended");
	}
	echo "<h5> $i </h5>";
}

finish1:
echo "<h4>Jumped to finish after 7</h4>";


//exit;
//die("program ended");


?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>