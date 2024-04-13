<a href="./"><h2>GO back to LPU FOLDER</h2></a>

<h3> Array Stuff </h3>

<pre>

<?
echo "<h2>Indexed arrays</h2>";

$cars = array("Volvo", "BMW", "Toyota");
echo print_r($cars)."<br>";

$colors = ["Red", "Blue", "Green"];
echo print_r($colors)."<br>";

foreach ($colors as $c){
	echo "Color is = " .$c."<br>";
	}

echo "<h2>Associative arrays</h2>";
$student1 = array("Name"=>"Banuka", "Age"=>"37", "ID"=>"11917000");
$student2 = ["Name"=>"Sam", "Age"=>"12", "ID"=>"1193330"];

echo "<br><br>".print_r($student1)."<br>";
echo print_r($student2)."<br>";


echo "<h2>Associative array printing</h2>";

foreach ($student1 as $k => $val){
	echo "Label = " .$k. "-- Value = " .$val ."<br>";
}

echo "<h2>Multidimensional Arrays</h2>";

$students = [
	"Banuka"=>["Section"=>"D1807", "Age"=>"37", "ID"=>"11917000"],
	"Sam"=>["Section"=>"D1806", "Age"=>"12", "ID"=>"1193330"],
	"Dave"=>["Section"=>"D1807", "Age"=>"44", "ID"=>"11635344"],
];

foreach ($students as $st_name => $stinfo){
	echo "Student 1: $st_name<br>";

	foreach ($stinfo as $k => $val){
		echo  $k. " ---- " .$val ."<br>";
	}

}

?>


<?
$marks = array("Maths" => 78, "Physics" => 24, "Art" => 50);
//question: write a program to get sum of 3 subjects and average.
//also sort array by highest mark to lowest mark order & print 3 subject names
$sum = 0;
$avg = 0;
foreach ($marks as $key => $value) {
	$sum += $value;
}
$avg = $sum /3;

echo "<hr> Sum is: $sum And average: $avg";

?>

</pre>

<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>