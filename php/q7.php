<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
/*If - all 3 subjects has marks equal to or above 70
Say AMAZING

>If only 2 subjects have marks above 70 & other is below
Say GOOD 

If only 1 subject has marks above 70
Say AVERAGE

If none of the marks are above 70
Say POOR
*/

$maths = 0;
$sci = 0;
$his = 0;


echo '$maths-' . $maths . ',<br>$sci-' . $sci .',<br>$his-' . $his  . '<br>';

$outcome = '';

if( $his == 0 ||  $sci == 0 ||  $maths == 0   ) {
    // IF even 1 subject has marks 0 , then say FAIL.
    $outcome = 'FAIL';
}elseif( ($his >=70) && ($maths >=70) && ($sci >=70) ) {
    //all 3 subjects has marks equal to or above 70
    $outcome = 'AMAZING';
}elseif( ($his >=70 && $sci >=70) || ($his >=70 && $maths >=70) || ($sci >=70 && $maths >=70)){
    //If only 2 subjects have marks above 70 & other is below
    $outcome = 'GOOD';
}elseif( ($his >=70) || ($maths >=70) || ($sci >=70) ){
    //If only 1 subject has marks above 70
    $outcome = 'AVERAGE';
} else {
    $outcome = 'POOR';
}

echo 'Student performed '. $outcome;




?>
</body>
</html>

