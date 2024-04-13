<?php
$qnum = "Question A1";
?>

<!DOCTYPE html>
<html>
<head><title>PHP Questions</title></head>
<body>
<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1><?= htmlentities($qnum); ?> </h1>
<p>Write a PHP program to read any two values from the text boxes at runtime and
to find addition and subtraction. Print the result in text boxes.</p>

<form method="POST" target=_self>
Value 1: <input type="text" name="val1" size="10" value= <? echo isset($_POST['val1']) ? $_POST['val1'] : '' ?> ><br />
Value 1: <input type="text" name="val2" size="10" value= <? echo (isset($_POST['val2']) ? $_POST['val2'] : ''); ?>  ><br />
<input type="submit" value="Compute + - * / % "/>
<input type="reset">
<br /><br />
</form>
    

<?php
if ( isset($_POST['val1']) && isset($_POST['val2'])) {

echo '<form><input type="submit" value="Reload Page"></form>'; 

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];

    if ( !is_numeric($val1) || !is_numeric($val2) ){
        echo "<br /> Enter numeric only";
        exit;
    }
    
$vadd = $val1+$val2;
$vsub = $val1-$val2;
$vmul = $val1*$val2;
$vdiv = $val1/$val2;
$vmod = $val1%$val2;

echo "<br /> $val1 + $val2 = <input type='text' value=$vadd size='10' />";
echo "<br /> $val1 - $val2 = <input type='text' value=$vsub size='10' />";
echo "<br /> $val1 * $val2 = <input type='text' value=$vmul size='10' />";
echo "<br /> $val1 / $val2 = <input type='text' value=$vdiv size='10' />";
echo "<br /> $val1 % $val2 = <input type='text' value=$vmod size='10' />";
 
}//end if

?>


</body>
</html>