<style>
    label { display: inline-block; width: 100px; text-align: right; }
    body {background-color: lightgreen; color:purple;}
</style>

<table width="80%">
	<tr><td>Reg No:</td><td>11907550</td></tr>
	<tr><td>Name:</td><td>Banuka Vidusanka Paniyan Duwage</td></tr>
	<tr><td>Section:</td><td>D1807</td></tr>
	<tr><td>Roll No:</td><td>RDE851 A032</td></tr>
</table>
<hr>

<h2>Login Page</h2>

<form method="GET">
<label>UID: </label> <input type="text" name="i_uid" size="10"><br />
<label>Password: </label> <input type="text" name="i_pass" size="10"> 
<input type="submit" value="Login" name="i_login" />
</form>

<?php
	if ( isset($_GET['i_login']) ) {
	    $v_uid = trim( $_GET['i_uid'] );
	    $v_pass = trim( $_GET['i_pass'] );
	    echo '<h1>';
	    if(strlen($v_uid)==0 ||strlen($v_pass)==0 ){
	    	echo "Please fill both UID & Password";
	    } 
	    else if(substr($v_uid, 0,3) != "111"){
	    	echo "UID should start with 111";
	    }else if(strlen($v_uid) != 8){
	    	echo "UID should be of length 8";
	    }else if(strlen($v_pass) < 6){
	    	echo "Password should be more than 6 characters";
	    }else{
	    	echo "SUCCESS";
	    }
	    echo '</h1>';
	    echo '<form><input type="submit" value="Reset Form"></form>';
	}else{
		echo '<pre>Enter UID of 8 characters starting with 111 (example: 111abc78)<br>Password should be 6 characteres or more.<br>Note: Program trim left & right space characters from UID & PW</pre>';
	}

?>