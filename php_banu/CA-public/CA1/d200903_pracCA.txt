<a href="../"><h2>GO back to LPU FOLDER</h2></a>

<xmp>Q1 - Write a program and print computer%mangoes by considering following arrays.
$a1= ("bottle","computer","orange","mangoes", "black"); 
$b= ("cat","mangoes","rat", "elephant", "computer")</xmp>

<?
$a1= ["bottle"," computer"," orange","mangoes", "black"]; 
$b= ["cat","mangoes"," rat", "elephant", "computer"];

echo $a1[1],"%",$a1[3], "<br>";
echo $b[4],"%",$b[1], "<br>";
?>


<xmp>------------------------------------------------
Q2 - Write a php script to generate the following output:

E_ID 	E_Name 	E_dept 		E_City 		E_Company 
452 	Jamie 	Computer 	Hyderabad 	Google 
197 	King 	Electronics Mumbai 		Microsoft 
256 	Lily 	English 	Delhi 		IBM 
</xmp>

<?
$myarr = array(
["E_ID","E_Name","E_dept","E_City","E_Company"],
["456","Jamie","Computer","Hydrabad","Google"],
["197","King","Electronics","Mumbai","Microsoft"],
["256","Lily","English","Delhi","IBM"]
);

echo "<table border=1 width=500>";
foreach ($myarr as $row){
	echo "<tr>";
	foreach ($row as $elem){
		echo "<td>$elem</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>


<xmp>------------------------------------------------ 
Q3 - Write a PHP script to print following output for the following input:
Input array: $a1= ("bottle"," computer"," orange"," mangoes", "black")
Output string: ter-oes-ack
</xmp>

<?
$a1= array("bottle","computer","orange","mangoes", "black");
$str_out = substr($a1[1], -3)."-".substr($a1[3], -3)."-".substr($a1[4], -3);
echo $str_out;
?>


<xmp>------------------------------------------------ 
Q4 - Write a PHP script to arrange the elements of an array 
$a= ("bottle"," computer"," orange"," mangoes", "black")
in aescending order without using in-built functions.
</xmp>

<?
//bubble sorty applied on the array
$a= array("bottle","computer","orange","mangoes", "black");

for($i=0; $i<count($a)-1; $i+=1){
	for($j=0; $j<count($a)-1-$i; $j+=1){
		if ($a[$j]>$a[$j+1]){
			$temp = $a[$j];
			$a[$j] = $a[$j+1];
			$a[$j+1] = $temp;
		}
	}
}

$str_out = implode(", ", $a);
echo $str_out;
?>


<xmp>------------------------------------------------ 
Q5 - Write a PHP script which will display the array 
$b= ("cat"," yellow"," red", "table") in the following way:
➢ Cat
➢ Yellow
➢ Red
➢ Table
</xmp>

<?
$b = array("cat","yellow","red", "table");

echo '<ul style="list-style-type: none;">';
foreach ($b as $element){
	echo "<li> ➢ ", ucfirst($element), "</li>";
}
echo "</ul>";
?>


<xmp>------------------------------------------------ 
Q6 - Write a PHP script to check if the input by a user is 
"Lovely professional University" then 
l$o$v$e$l$y$p$r$o$f$e$s$s$i$o$n$a$l$u$n$i$v$e$r$s$i$t$y$ 
print else print b.y.e.b.y.e.w.o.r.l.d.
</xmp>

<?
$lpu = "Lovely professional University";
$input_list = ["Hello World", "Lovely professional University", "Bye Bye World"];
// need to get user input not array.

foreach ($input_list as $mystr){
	if ($mystr == $lpu){
		$seperator = '$';
	}else{
		$seperator = '.';
	}

	$tempstr = strtolower($mystr); //make string lowercase
	$tempstr =str_replace(" ", "",$tempstr); //remove spaces in string

	for ($i=0; $i<strlen($tempstr); $i+=1){
		echo $tempstr[$i],$seperator;
	}
	echo "<br>";
}
?>

<xmp>------------------------------------------------ 
Q7 - Write a program to split the following array into 
sub arrays of size 3 and array each sub array in descending order.
$a= ("bottle"," computer"," orange"," mangoes", "black")
</xmp>

<?
$a= array("bottle","computer","orange","mangoes", "black");
$a1 = array_slice($a,0,3);
$a2 = array_slice($a,3,3);

rsort($a1);
rsort($a2);
echo "<pre>";
print_r($a1);
print_r($a2);
echo "</pre>";
?>


<xmp>------------------------------------------------ 
Q8 -Write a PHP script to generate the following output:
Input array: $a1= ("colour"," chair"," table"," fish", "yellow")
Output: chair*elephant*table
</xmp>

<?
$a1= array("colour"," chair","table"," fish", "yellow");
$str_out = $a1[1]."*elephant*".$a1[2];

echo $str_out;
?>


<xmp>------------------------------------------------ 
Q9 -Write a program to generate the string: "yellow#jeorge#cat#orange#white" 
by considering the following array:
$a= ("yellow","peter","cat","blue","white");
</xmp>

<?
$a= array("yellow","peter","cat","blue","white");
$a[1] = "jeorge";
$a[3] = "orange";
$str_out = implode('#',$a);
echo $str_out;
?>


<xmp>------------------------------------------------ 
Q10 -Write a PHP script to print following output for the following input:
Input array: $a1= $a1= ("bottle"," computer"," orange"," mangoes", "black");
Output:
1. Bottle#computer
2. Orange#mangoes
3. Black#white
</xmp>

<?
$a1= array("bottle","computer","orange","mangoes", "black", "white");
echo "<ol>";
for ($i=0; $i<count($a1); $i+=2){
		echo "<li>".ucfirst($a1[$i])."#".$a1[$i+1]."</li>";
}
echo "</ol>";

?>