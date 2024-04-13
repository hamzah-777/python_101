<h3>PHP Regular Expressions - Testing Platform</h3>
<style> .red{color:red;} .blue{color:blue;}</style>

<?php

function call_preg_match($ex, $str){
	if($x = preg_match_all($ex, $str)) {
		//preg_match_all will count the times expression matches in string
		echo("<span class='blue'> Reggex: <b>$ex</b> MATCHED in <b><u>$str</u></b> : $x TIMES</span> <br>");
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

echo "<h3 id='id1'>1. Simple reggex - case-insensitive with - i</h3>";
$ex_Arr = [ "/CAP/", "/Cap/", "/cap/", "/CaP/i", "/CAP/i" ];
$str_Arr = [ "CAP123CAP098cap", "Cap112", "weCAP123cap00", "111capss", "aaaCAAAPPPP" ];
processArrays($ex_Arr, $str_Arr);

echo "<h3 id='id2'>2. Simple reggex - match at begining of str with ^ (caret) </h3>";
$ex_Arr = [ "/^CAP/", "/^Cap/", "/^cap/", "/^Cap/i", "/^CAP/i" ];
$str_Arr = [ "CAP123", "Cap112", "weCAP123", "111capss", "aaaCAAAPPPP" ];
processArrays($ex_Arr, $str_Arr);


echo "<h3 id='id3'>3. Simple reggex - match at End of str with $ (dollar sign) </h3>";
$ex_Arr = [ "/CAP$/", "/Cap$/", "/cap$/i", "/^cap$/", "/^CAP$/i" ];
$str_Arr = [ "CAP", "yelloCAP", "cAP", "111capss", "aaaCaaCaP" ];
processArrays($ex_Arr, $str_Arr);




echo "<br><br><br><br>";
?>