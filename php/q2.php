<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>multiplication table</h1>
<form method="post">
<label>Input number:</label><br>
<input type="number" name="my_input" min='-1000' max='1000000000000000000000000000000000000000000000000000000' >

<br><input type="submit" value="Submit">
<!-- <button onclick="doReload()">Reset</button> -->
</form>

<pre>
<?php

// Write a PHP program to print out the multiplication table upto 6*6.
// Output:
// * * * * * * 
// 1   2   3   4   5   6                                                                    
//  2   4   6   8  10  12                                                                        
//  3   6   9  12  15  18                                                                      
//  4   8  12  16  20  24                                                                             
//  5  10  15  20  25  30                                                                     
//  6  12  18  24  30  36

/*
for ($i = 0; $i < 6; $i++) {
    //  * * * * * * 
    echo '* ';
}
echo '<br> END<br>';

for ($i = 1; $i < 7; $i++) {
    //  1   2   3   4   5   6  
    echo $i . ' ';
}
echo '<br> END<br>';

for ($i = 1; $i < 7; $i++) {
    //  2   4   6   8  10  12
    echo $i*2 . ' ';
}
echo '<br> END<br>';
*/







if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $multi = $_POST['my_input'];

    if( is_numeric($multi) && $multi <= 10000){
        for ($i = 1; $i < 37; $i++) {
            //  4 8 12
            echo $i * $multi . ' ';
        }
    } else {
        echo 'Enter a valid number below 10000';
    }
    echo '<br> END<br>';
}

echo '<br> static table <br>';
for ($yoooo = 1; $yoooo < 8; $yoooo++) {
    for ($i = 1; $i < 12; $i++) {
        //  2   4   6   8  10  12
        echo $i * $yoooo . ' ';
    }
    echo '<br>';
}

echo '<br> END<br>';
?>

</pre>
</body>
</html>