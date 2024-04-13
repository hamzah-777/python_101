<? session_start(); ?>

<style>
    label { display: inline-block; width: 140px; text-align: right; }
    body {background-color: powderblue; color:purple;}
    table, th, td {border-collapse: collapse; border: 1px solid black; text-align: center; width:50em;}
</style>

<table >
	<tr><td>Reg No:</td><td>11907550</td></tr>
	<tr><td>Name:</td><td>Banuka Vidusanka Paniyan Duwage</td></tr>
	<tr><td>Section:</td><td>D1807</td></tr>
	<tr><td>Roll No:</td><td>RDE851 A032</td></tr>
</table>

<h1>Coffee Heaven</h1>

<?php

$coffee_sold = array (
"David_Sean" => ["Latte"=>5 , "Cappuchino"=>2 , "Americano"=>0 , "Espresso"=>2 , "Tea"=>8 ],
"Sam_Kinnely" => ["Latte"=>6 , "Cappuchino"=>5 , "Americano"=>4 , "Espresso"=>1 , "Tea"=>8 ],
"Sahil_Mehera" => ["Latte"=>0 , "Cappuchino"=>0 , "Americano"=>0 , "Espresso"=>0 , "Tea"=>10 ],
"Gaberiel_Matherson" => ["Latte"=>6 , "Cappuchino"=>2 , "Americano"=>7 , "Espresso"=>6 , "Tea"=>4 ],
"Banuka_Vidusanka" => ["Latte"=>5 , "Cappuchino"=>8 , "Americano"=>3 , "Espresso"=>0 , "Tea"=>5 ]
);

echo "<h2>Simple associative-array printing.</h2>";
echo "<p>Coffee Heaven has 5 employees.<br> The associative array consist data regarding sales of Shop.<br> It has Barista name along type of coffee and sale count for each.</p>";

echo "<table><tr>";
foreach ($coffee_sold as $person => $arr){
	echo "<td><h3><i>$person</i></h3>";
	foreach($arr as $c_name => $c_count){
		printf("Sold : %s - %ss<br>",$c_count, $c_name);
	}
	echo "</td>";
}
echo "</tr></table><br>";
echo"<hr>";

echo "<pre>extra credit stuff</pre>";
echo "<h3><u>Types of Coffee sold by each Barista </u></h3>";
echo "<table><tr><th> Barista \ Coffee</th>";
foreach ($coffee_sold as $person => $arr){
	foreach($arr as $c_name => $c_count){
		echo "<th>$c_name</th>";
	}
	break; //let it only run once
}
echo "</tr>";

foreach ($coffee_sold as $person => $arr){
	echo "<tr>";
	echo "<th>$person</th>";
	foreach($arr as $c_name => $c_count){
		echo "<td>$c_count</td>";
	}
	echo "</tr>";
}
echo "</table><br>";


//extra credit - price of each coffee
$coffee_price = ["Latte"=>3.5 , "Cappuchino"=>2.2 , "Americano"=>3.1 , "Espresso"=>4.4 , "Tea"=>2.5];

echo "<h3><u>Cost of each coffee</u></h3>";
echo "<table><tr><th> Price:</th>";
foreach ($coffee_price as $c_name => $c_price){
	echo "<td>$c_name : $c_price £</td>";
}
echo "</tr></table><br>";

//sales by each Barista calculate & print
echo "<h3><u>Sales accumulated by each Barista</u></h3>";
echo "<table><tr><th> Total Sales:</th>";

foreach ($coffee_sold as $person => $arr){
	echo "<td>$person : <br>";
	$sum = 0;
	foreach($arr as $c_name => $c_count){
		$sum = $sum + ( $c_count * $coffee_price[$c_name] );
	}
	echo "$sum £</td>";
}
echo "</tr></table>";

echo"<hr><br><br>";

?>

<h3>Daily hours of work by Employees - Dynamic - use SESSION Cookie</h3>
<p>This form generate associative array using input from user.<br>
	it use DATE set as key of 1st level associative array.<br>
	Value of that array is another associative array containing Barista name with worked hours</p>
<p>It makes use of SESSION COOKIE to build up the associative array by passing array though POST methods.</p>

<form method="GET">
<label><b>Date: </b></label> <input type="date" name="Date" size="10"><br><br>
<label>David : </label> <input type="number" name="David_Sean" size="10"> <br>
<label>Sam : </label> <input type="number" name="Sam_Kinnely" size="10"> <br>
<label>Sahil : </label> <input type="number" name="Sahil_Mehera" size="10"> <br>
<label>Gaberiel : </label> <input type="number" name="Gaberiel_Matherson" size="10"> <br>
<label>Banukaa : </label> <input type="number" name="Banuka_Vidusanka" size="10"> <br><br>

<input type="submit" name="Destroy" value="Destroy Session & Reset " /> 
<input type="submit" value=" Submit worked Hours" name="h_submit" />
</form>

<?php

$hourly_arr = [];
$temp_arr = [];

if ( isset($_SESSION['myarray'] )){
	$hourly_arr = $_SESSION['myarray'];
}

if ( isset($_GET['h_submit']) && $_GET['Date']!="") {

	    $Date = $_GET['Date'];
	    $David_Sean = intval($_GET['David_Sean']);
	    $Sam_Kinnely = intval($_GET['Sam_Kinnely']);
	    $Sahil_Mehera = intval($_GET['Sahil_Mehera']);
	    $Gaberiel_Matherson = intval($_GET['Gaberiel_Matherson']);
	    $Banuka_Vidusanka = intval($_GET['Banuka_Vidusanka']);

	    $temp_arr = ['David'=>$David_Sean, 'Sam' => $Sam_Kinnely, 'Sahil' => $Sahil_Mehera, 'Gaberiel' => $Gaberiel_Matherson, 'Banuka' => $Banuka_Vidusanka];

	    $hourly_arr["$Date"] = $temp_arr;

	    $_SESSION['myarray']=$hourly_arr;

}else{
		echo 'Enter DATE along with work HOURS for each Employee';
}

if(isset($_GET['Destroy'])){ 
	session_destroy();
}

echo "<h3>Stored Data on the associative array</h3>";

foreach ($hourly_arr as $dt => $ary){
	echo "<div style='display:inline-block; width: 200px;'>";
	echo "On : <b>$dt</b><br>";
	foreach($ary as $k => $v){
		printf("%s worked: <b>%s</b> hours<br>",$k, $v);
	}
	echo "</div>";
}

echo "<br><br><hr>Associative array view using var_dump<pre>";
var_dump($hourly_arr);
echo "</pre>";

?>

<hr><br><br>