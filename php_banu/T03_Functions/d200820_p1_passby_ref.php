<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<?php
//parameters in functions
$a = 3;
function doubler1(&$value) //pass by reference
{
  $value = $value + 10;
  echo "<h2> Inside func val: ".$value;
}
echo "<h2> Outside func before call: ".$a;
doubler1($a);
echo "<h2> Outside func after call by ref: ".$a;
?>

<hr>
<?php
//parameters in functions
$b = 3;
function doubler2($value) //pass by value
{
  $value = $value + 10;
  echo "<h2> Inside func val: ".$value;
}
echo "<h2> Outside func before call: ".$b;
doubler2($b);
echo "<h2> Outside func after call by val: ".$b;
?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>