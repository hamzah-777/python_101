<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>non-repeated char finder</h1>
<form method="post">
<label>Input text:</label><br>
<input type="text" name="my_input"  >

<br><input type="submit" value="Submit"><br><br>
</form>

<?php
/*
Write a PHP program to find the first non-repeated character in a given string.
Input: green
Output: g
Input: abcdea
Output: b

Input: aaaabbbbcccdeff
->> de
*/


// foreach($my_input as $char){
//     echo $char . '-';
// }

$my_input = 'aaabbcdddeefggg';
echo $my_input . '<br>';

$counts = [];
echo '<pre>';

// having a for loop - to go through each of 
// the characters in given string (word)
for($i=0; $i < strlen($my_input); $i++){
    echo $my_input[$i] . '-';

    if( array_key_exists( $my_input[$i] , $counts)  ) {
        $counts[ $my_input[$i] ] = $counts[ $my_input[$i] ] + 1 ;
    } else {
        $counts[ $my_input[$i] ] = 1;
    }
}
echo '<br>';
// echo '<br>' . var_dump($counts) . '<br>';

//$singles = [];
// here i am going though the counts array one by one

// foreach ($counts as $letter => $letter_count){
//     // thhis will find the very first non-repeated char
//     if ($letter_count == 1){
//         echo $letter;//         break; // << find 
//         break; // << find 
$reveresed_array = array_reverse($counts);
foreach ($reveresed_array as $letter => $letter_count){

    if ($letter_count == 1){
        echo $letter;
        break; 
    }
}  


/*
purple



*/




?>

</body>
</html>