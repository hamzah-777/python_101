<h3>PHP Regular Expressions - Testing Platform - 2</h3>
<style> .red{color:red;} .blue{color:blue;}</style>

<?php

function call_preg_match($ex, $str){
	if(preg_match($ex, $str)) {
		$x = preg_match_all($ex, $str);
		//preg_match_all will count the times expression matches in string
		$cleared = preg_replace($ex,"-",$str);
		echo("<span class='blue'> Reggex: <b>$ex</b> MATCHED in <b><u>$str</u></b> : $x TIMES , Cleared: $cleared</span> <br>");
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

echo "<i>CONTENTES:</i>";
echo "<a href='#id1'><li>1. Simple reggex - case-insensitive with - i</li><a>";
echo "<a href='#id2'><li>2. Simple reggex - match at begining of str with ^ (caret) </li><a>";

echo "<h3 id='id4'>4. patterns & range using [square] brackets & ^ for negation</h3>";
$ex_Arr = [ "/[abc]/", "/[ABC]/", "/[!%&$]/", "/[^abc]/", "/[^$%&!]/",  ];
$str_Arr = [ "CAP123", "!Cap112Yes", "!XY&%", "abcdeeee", "Abcd123!10%" ];
processArrays($ex_Arr, $str_Arr);

echo "<h3 id='id5'>5. patterns & range using [square] brackets & ^ for negation</h3>";
$ex_Arr = [ "/[a-z]/", "/[^A-Z]/", "/[A-Z][a-z]/", "/[0-9]/" ];
$str_Arr = [ "CAP123", "Cap112", "weCAP123", "111capss", "aaaCAAAPPPP" ];
processArrays($ex_Arr, $str_Arr);






echo "<br><br><br><br>";
?>