<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<?php

$list1 = ["el1","el2","el3","el4","el5"];
$list2 = array_slice($list1, 1,3);
$list3 = array("e1"=>1, "e2"=>2);
echo"<pre>";
var_dump($list1);
echo "<br><br>";
var_dump($list2);

var_dump( extract($list1, EXTR_PREFIX_ALL, "v") );
echo "$v_1<br>";

echo gettype($list1);
echo gettype($list3);

?>

<h3>The range() function creates an array containing a range of elements.<br>
range(low, high, step)</h3>
<?
$number = range(0,5);
print_r ($number);
$number = range(0,50,10);
print_r ($number);
?>

<h3>The array_pad() function inserts a specified number of elements, with a specified value, to an array.<br>
array_pad(array, size, value)</h3>
<?
$a=array("red","green");
$a = array_pad($a,5,"blue");
print_r($a);
?>

<h3>The array_chunk() function splits an array into chunks of new arrays.<br>
array_chunk(array, size, preserve_key{true will keep key})</h3>

<?
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2)); //in to chinks of 2

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true)); //keep key
?>

<h3>The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.<br>
array_key_exists(key, array)</h3>
<?
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
?>

<h3>isset() check if any object is set</h3>


<h3>The extract() function imports variables into the local symbol table from an array.<br>
extract(array, extract_rules, prefix)</h3>
<pre>XTR_OVERWRITE - Default. On collision, the existing variable is overwritten
EXTR_SKIP - On collision, the existing variable is not overwritten
EXTR_PREFIX_SAME - On collision, the variable name will be given a prefix
EXTR_PREFIX_ALL - All variable names will be given a prefix
EXTR_PREFIX_INVALID - Only invalid or numeric variable names will be given a prefix
EXTR_IF_EXISTS - Only overwrite existing variables in the current symbol table, otherwise do nothing
EXTR_PREFIX_IF_EXISTS - Only add prefix to variables if the same variable exists in the current symbol table
EXTR_REFS - Extracts variables as references. The imported variables are still referencing the values of the array parameter</pre>

<?
$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";
?>

<h3>The compact() function creates an array from variables and their values.
<br>compact(var1, var2...)</h3>

<?
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";
$result = compact("firstname", "lastname", "age"); 
// pass variable name as string & create array from their val
print_r($result);
//----
echo "<br>";

$firstname = "Peter";
$lastname = "Griffin";
$age = "41";
$name = array("firstname", "lastname"); //names of vari in array
$result = compact($name, "location", "age"); //pass array of val-names
print_r($result);



?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>