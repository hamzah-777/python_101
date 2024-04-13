<?php
$num=60;
try{
	if($num<=20)
		throw new Exception("<h1>can chose calues above 20 only");
	echo "<h2>$num";
}
catch(Exeption $e){
	echo $e -> getMessage();
	//echo "<br><h1>chose non-zero donominator";
}
?>