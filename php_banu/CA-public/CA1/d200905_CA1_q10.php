<style>
    label { display: inline-block; width: 100px; text-align: right; }
    body {background-color: lightpink; color:navy;}
    p{color:blue;}
    b{color:brown;}
</style>

<table width="80%">
	<tr><td>Reg No:</td><td>11907550</td></tr>
	<tr><td>Name:</td><td>Banuka Vidusanka Paniyan Duwage</td></tr>
	<tr><td>Section:</td><td>D1807</td></tr>
	<tr><td>Roll No:</td><td>RDE851 A032</td></tr>
</table>
<br />

<h1>Patient Medical System</h1>
<p> Associative array is used to store patient details: ID, name, age, height, weight</p>
<p> ID is in form of M00 for male & F00 for female. <br> Using height & weight, program calculates BMI (body mass index) and age group of patients.</p>

<?
$patient_arr = array();
$patient_arr['M14'] = array('Name'=>'Dave Mathers', 'Age'=>13 , 'Height'=>1.36 , 'Weight'=>43 );
$patient_arr['F24'] = array('Name'=>'Jane Doe', 'Age'=>45 , 'Height'=>1.6 , 'Weight'=>72 );
$patient_arr['F14'] = array('Name'=>'Sansee Mae', 'Age'=>18 , 'Height'=>1.8 , 'Weight'=>55 );
$patient_arr['M32'] = array('Name'=>'James Dot', 'Age'=>5 , 'Height'=>0.8 , 'Weight'=>20 );
$patient_arr['M74'] = array('Name'=>'Mason Abr', 'Age'=>26 , 'Height'=>1.8 , 'Weight'=>65 );
$patient_arr['F76'] = array('Name'=>'Katrina Ci', 'Age'=>14 , 'Height'=>1.31 , 'Weight'=>25 );

// echo "<pre>";
// print_r($patient_arr);

foreach ($patient_arr as $id => $sub_arr){
	echo "<div style='display:inline-block; width: 200px;'>";
	echo "<h3><u>$id</u></h3>";	

	foreach($sub_arr as $k => $v){
		echo "<b>$k = $v </b><br>";
	}

	echo (substr($id, 0,1)=="M")?'<br>Gender: Male':'<br>Sex: Female';
	$bmi = 0.0;
	$h = $sub_arr['Height'];
	$w = $sub_arr['Weight'];

	$bmi = $w/($h*$h);
	$bmi = round($bmi, 2);
	echo "<br>BMI value = $bmi kg/m<sup>2</sup>";

	echo "<br>Patient is : ";
	if ($bmi<18.5){echo "Underweight";}
	else if ($bmi<24.9){echo "Normal Weight";}
	else{echo "Overweight";}


	echo "<br>Age group : ";
	if ($sub_arr['Age']<13){echo "Child";}
	else if ($sub_arr['Age']<18){echo "Teenager";}
	else if ($sub_arr['Age']<65){echo "Adult";}
	else{echo "Elderly";}

	echo "<hr></div>";
}

?>

<pre>

Age Grouping: 
Under 13: Child, 13-17: Teenager, 18-65: Adult, Over 65: Elderly.
BMI Grouping:
BMI: Under 18.5: Underweight, 18.5-24.8: Normal Weight, Over 24.9: Overweight.
UID - Gender relation:
UID start with M: Male, start with F: Female.
</pre>
<br>