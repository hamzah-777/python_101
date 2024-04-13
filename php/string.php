<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All about String in PHP</title>
</head>
<body>
<h1>All about String in PHP</h1>

<h1> Printing Strings</h1>

<ul>
<li>echo - allow printing many values at once
<li>print() - print only one value
<li>printf() - build formatted string by inserting values into a template
<li>print_r() - useful for debugging. it print contents of arrays, objects
<li>var_dump() - work similar to print_r()
</ul>

<br>

<pre>
<?php
$my_first_variable = "Hamzah";

//string
echo $my_first_variable;
echo '<br>';
print($my_first_variable);
echo '<br>';
printf($my_first_variable);
echo '<br>';
print_r($my_first_variable);
echo '<br>';
var_dump($my_first_variable);
echo '<br>';

//int
$my_first_variable = 1234;
echo $my_first_variable;
echo '<br>';
var_dump($my_first_variable);
echo '<br>';

//float
$my_first_variable = 1234.111;
echo $my_first_variable;
echo '<br>';
echo '<br>';

//bool
$my_first_variable = true;
echo $my_first_variable;
echo '<br>';
var_dump($my_first_variable);
echo '<br>';

//float written as a string, added a number
$my_first_variable = '1234.111';
echo $my_first_variable;
echo '<br>';
var_dump(1000 + $my_first_variable);
echo '<br>';

//float written as a string, added another stiring
$my_first_variable = '1234.111';
echo $my_first_variable;
echo '<br>';
var_dump('1000' . $my_first_variable);
echo '<br>';

$var1 = 100;
$var2 = 200;
$sum = $var1 + $var2;
echo $sum . '<br>';

$var1 = 'Hello ';
$var2 = 'Mr.';
$sum = $var1 . $var2;
echo $sum . '<br>';


//array
$my_first_variable = ["A","B","C"];
echo $my_first_variable;
echo '<br>';
var_dump($my_first_variable);
echo '<br>';

//array
$my_first_variable = ["A","B","C"];
echo $my_first_variable;
echo '<br>';
var_dump($my_first_variable);
echo '<br>';
?>
</pre>

</body>
</html>