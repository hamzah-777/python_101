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
        <input type="text" id="input1" name="input1" maxlength="20" readonly><br>

        <label>Password:</label><br>
        <input type="text" id="input2" name="input2" maxlength="20"><br><br>

        <br><input type="submit" value="Submit">
        <button onclick="doReload()">Reset</button>
    </form>

<?php

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_text = $_POST['input1'];
    $input_text2 = $_POST['input2'];

    
    $seceret_password = 'londoN123';

    if ( $input_text2 == $seceret_password ) {
        echo '<br>1. password is exact match';
    } elseif (strtolower( $input_text2 ) == $seceret_password){
        echo '<br>2. password characters are matching (case is off)';   
    } elseif (strtolower( $input_text2 ) == strtolower($seceret_password)){
        echo '<br>3. password characters are matching (case is off in both input & password)';
    } elseif ( trim( strtolower( $input_text2 ) ) == $seceret_password){
        echo '<br>4. password characters are matching (but found some extra spaces @ front or back)';    
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