<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h3>explode() func [do split] in to array - string func return array</h3>
<? $var1 = "hello pretty, world dear"; 

$arr1 = explode(" ", $var1);
print_r ($arr1);
?>
<h3>array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.</h3>

<?
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?>


<h3>implode()  fucntion join together an array to a string </h3>
<? $arr2 = ["one_", "twp---", "threee"];
$var2 = implode($arr2);
print_r($var2);
?>

<h3>The array_slice() function returns selected parts of an array.
<br>array_slice(array, start, length, preserve) - if preserve set to true, array index will be kept</h3>
<? 
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2)); //return 2nd index to end
echo "<br>";
print_r(array_slice($a,1,2));
echo "<br>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,-2,1)); //using negative start parameter
?>

<?
//With both string and integer keys:
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,1,2));

$a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
print_r(array_slice($a,1,2));
?>

<h3>The array_splice() function removes selected elements from an array and replaces it with new elements. <br>The function also returns an array with the removed elements.
	<br>array_splice(array, start{can be negativ}, length, array)</h3>

<?
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);
?>




echo substr($str, 0, 5);  // Outputs: Hello
echo substr($str, 0, -7); // Outputs: Hello
echo substr($str, 0);     // Outputs: Hello World!
echo substr($str, -6, 5); // Outputs: World
echo substr($str, -6);    // Outputs: World!
echo substr($str, -12);  
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>