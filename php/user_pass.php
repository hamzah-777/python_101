<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>PHP Password concepts</h2>
    <form method="post">

        <label>Username:</label><br>
        <input type="text" id="input1" name="input1" maxlength="20" value="hamzah@gmail.com" ><br>

        <label>Password:</label><br>
        <input type="text" id="input2" name="input2" maxlength="20"><br><br>

        <br><input type="submit" value="Submit">
        <button onclick="doReload()">Reset</button>
    </form>

<?php
    $seceret_username = 'hamzah@gmail.com'; // this can have uppercase or .. extra spaces at front & back
    $seceret_password = 'london123'; // DO NOT BUDGE. password has to be EXACT MATCH.

    echo '<br>'.$seceret_username . '<br>'.  $seceret_password.'<br>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_text1 = $_POST['input1']; //input username
    $input_text2 = $_POST['input2']; //input password

    var_dump()
    echo '<br>inputs were--'.$input_text1 . '<br>'.  $input_text2.'<br>';

    //TEST scanarion 1 - username is - 'HAMZAH@GMAIL.com' , pw- london123
    // give me output - 2. good enough for me - LET THEM IN!

    if ( $input_text1 == $seceret_username && $input_text2 == $seceret_password ) {
        echo '<br>1. perfect match match- LET THEM IN!';

    } elseif ( strcasecmp($seceret_username, $input_text1) && ($input_text2 == $seceret_password) ) {
echo '2. good enough for me - LET THEM IN!';
    
/*
    } elseif (strtolower( $input_text2 ) == $seceret_password){
        echo '<br>2. password characters are matching (case is off)';   
    } elseif (strtolower( $input_text2 ) == strtolower($seceret_password)){
        echo '<br>3. password characters are matching (case is off in both input & password)';
    } elseif ( trim( strtolower( $input_text2 ) ) == $seceret_password){
        echo '<br>4. password characters are matching (but found some extra spaces @ front or back)';    
*/

    } else {
        echo '<br>9. password is definitly wrong';
    }


    // strcmp(string_1, string_2) - string compare (it needs the case to be same)
    // strcasecmp(string_1, string_2) - compare while ignore case
    // strncmp(string_1, string_2, len) - compare first n number of char
}
    ?>
</body>
</html>