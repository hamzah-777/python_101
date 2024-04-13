<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.10</i></h2>

<? 
$uid = "S1234560";
$len8 = 8; //ID length must be 8char
?>

<h4>Welcome to Login stuff</h4>
<h2>
<? 
echo $uid, " is ";

if ( strlen((string)$uid) == $len8 ){
	// case: ((string)$uid) == $len8 ) // check length
	
	//(substr($STRING, StartPos,NumofChar)//
	if ( is_numeric((substr($uid, 1,7) )) == 1){
		//checks if last 7 char in uid produce a numeric (has no alph)
		//now we can check first character for STUDENT, PPARENT, FACULTY
		if(strpos($uid, "F") === 0){
			echo " an acceptable UID!<br>Welcome Faculty";
		}elseif(strpos($uid, "S") === 0){
			echo " an acceptable UID!<br>Welcome Student";
		}elseif(strpos($uid, "P") === 0){
			echo " an acceptable UID!<br>Welcome Parent";
		}else{
			echo " not an acceptable UID!<br>First char must be F, P or S";
		}	
	}else{
		echo "Invalid. 
		<br>UID must be starting with Alphabet followed by 7 digits";
	}
	
}else{
	// case: ((string)$uid) != $len8 ) //
	if( strlen((string)$uid) < $len8 ){
	echo "Too short. <br>Expect 8 char";
	}else if( strlen((string)$uid)> $len8 ){
	echo "Too long. <br>Expect 8 char";
	}else{
	echo "inValid. <br>not sure why.";
	}
	
}//end of length check


 ?>
</h2>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>