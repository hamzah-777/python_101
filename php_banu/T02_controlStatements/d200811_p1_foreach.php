<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.11</i></h4>

<? 
$uidarray = array("S1234567","F1234567","P1234567","P123456732", "S1234563", "S12345");
?>

<h4>Welcome to Login stuff</h4>
<xmp>
Sample id
Student S1234567 (8.length)
Faculty F1233432 (8.length)
Parent P123456789 (10.length)

</xmp>
<h4>
<? 
#foreach (array as value) {   code to be executed; }

foreach ($uidarray as $uid){ 

		echo $uid, " is ";

		if( (strpos($uid, "F") === 0)&&( strlen((string)$uid) == 8 ) ){
			echo " an acceptable UID!<br>Welcome Faculty";
		}elseif((strpos($uid, "S") === 0)&&( strlen((string)$uid) == 8 ) ){
			echo " an acceptable UID!<br>Welcome Student";
		}elseif((strpos($uid, "P") === 0)&&( strlen((string)$uid) == 10 ) ){
			echo " an acceptable UID!<br>Welcome Parent";
		}else{
			echo " not an acceptable UID!<br>First char must be F, P or S";
		}	
echo "<br><br>";

}
 ?>
</h2>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>