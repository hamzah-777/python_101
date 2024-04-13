<h3>PHP Regular Expressions - Testing Platform</h3>
<style> .red{color:red;} .blue{color:blue;}</style>

<?php

function call_preg_match($ex, $str){
	if(preg_match($ex, $str)) {
		$x = preg_match_all($ex, $str);
		$replaced = preg_replace($ex, "-", $str);
		echo("<span class='blue'> Reggex: <b>$ex</b> MATCHED in <b><u>$str</u></b> </span> ");
		echo(" - <b>$x</b> TIMES,");
		echo ("<b> __After preg_replace: $replaced </b><br>");
	}
	else {
		echo("<span class='red'> Reggex: <b>$ex</b> NOT MATCHED in <b><u>$str</u></b></span> <br>");
	}
}

function processArrays($ex_Arr, $str_Arr){
	foreach($ex_Arr as $ex){
		echo("<b>Testing Expression: <i>$ex</i> </b><br>");
		foreach($str_Arr as $str){
			call_preg_match($ex, $str);
		}
		echo("<hr>");
	}
	echo("<hr>");
}


echo "<h3>1. Simple reggex - Question mark </h3>";

$ex_Arr = [ "/cars/", "/car/", "/cars?/", "/https?/", "/https/"  ];
$str_Arr = [ "mycar", "mycars55", "mycarsss", "12https123", "12http111", "httpssss"];

processArrays($ex_Arr, $str_Arr);
?>


<h2>So the question mark is a Quantifier. it basically says last character (or phrase) is optional. <br>
In preg_replace, using cars? would... replace cars* if exisit, or car* if that exisit. </h2>


<?php
$ex_Arr = [ "/D(1807)?/", "/D(1806)?/" , "/D?1807/" ];
$str_Arr = [ "I am from D1807 class", "In D123", "In R1807", "DD1807"];

processArrays($ex_Arr, $str_Arr);
?>

<br><br>