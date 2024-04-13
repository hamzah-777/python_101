<?php

$ex = '/([A-Z]{3})/'; //|[0-9]{5}

$str1='eCAP525';



$str2='MTH525';

$str3='MT525';


if(preg_match($ex, $str1)) {
echo("It is a match");
echo("<b>$ex </b>");
}
else {
echo("String str is not as per pattern");
}


?>