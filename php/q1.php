<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>

<form method="post">
<label>Input number:</label><br>
<input type="text" name="my_input">

<br><input type="submit" value="Submit">
<!-- <button onclick="doReload()">Reset</button> -->
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_text = $_POST['my_input'];
    echo '<br>input was: ' . $input_text;

    //YOUR SOLUTION GOES HERE.
    if($input_text <= 0 ) {
        echo '<br>output is: ' . -1;
    } 
    
    elseif( $input_text < 10 ) {
        $output = $input_text * 5;
        echo '<br>output is: ' . $output ;
    } 
    
    else {
        $output = $input_text / 2;
        echo '<br>output is: ' . $output ;
    }


    echo '<br>hii'  ;
}
echo '<br><br><br>';
?>
    <pre>
    Problem scenario.
Using php & html add an input field (that accept a number)
Then use php, to get that number, check if it is a positive number ( more than 0)
If NOT, output -1,
If more than 0 but less than 10,
Multiply entered number by 5 and give output
If the number is 10 or bigger, give output as: 
entered number divided by 2.

Ex:
input - output
-5 -> -1
3 -> 15
110 -> 55 
    </pre>

    </body>
    </html>