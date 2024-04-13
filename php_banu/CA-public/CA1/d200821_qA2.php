<?php
$qnum = "Question A2";
?>

<!DOCTYPE html>
<html>
<head><title>PHP Questions</title></head>
<style>
    label { display: inline-block; width: 150px; text-align: right; }
    body {background-color: powderblue; color:purple;}
</style>
<body>
<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1><?= htmlentities($qnum); ?> </h1>
<xmp>Write a PHP program to read any two values and to find addition, subtraction.
multiplication, division and modulus with help of give data by using switch case by
choosing the given options.
+ > r = a+b
— > r = a—b
* > r = a*b
/ > r = a/b
% > r = a%b
otherwise “wrong symbol”</xmp><br />

<form method="POST">
<label>Value 1:</label> <input type="text" name="val1" size="10" value= <? echo isset($_POST['val1']) ? $_POST['val1'] : '' ?> ><br />
<label>Value 1:</label> <input type="text" name="val2" size="10" value= <? echo isset($_POST['val2']) ? $_POST['val2'] : '' ?> ><br />
<label>Operation:</label> <input type="text" name="opr" size="10" value= <? echo isset($_POST['opr']) ? $_POST['opr'] : '' ?> > (accept: + - * / %) <br />
   
<input type="submit" value="Compute" name="compute" />
<br /><br />
</form>
    

<?php

if ( isset($_POST['compute']) ) {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $opr = $_POST['opr'];

    echo '<form><input type="submit" value="Reload Page"></form>'; 

    if ( !is_numeric($val1) || !is_numeric($val2) ){
        echo "<br /> Enter numeric only";
        exit;
    }
    
    switch ($opr){
        case '+':
            echo "<br /> $val1 + $val2 = ", $val1+$val2;
            break;
        case '-':
            echo "<br /> $val1 - $val2 = ", $val1-$val2;
            break;
        case '*':
            echo "<br /> $val1 * $val2 = ", $val1*$val2;
            break;
        case '/':
            echo "<br /> $val1 / $val2 = ", $val1/$val2;
            break;
        case '%':
            echo "<br /> $val1 % $val2 = ", $val1%$val2;
        default:
            echo "wrong symbol";
    } //end switch
 
}//end if

?>

    

</body>
</html>