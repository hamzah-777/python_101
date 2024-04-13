<?
$originalTeam = [13665,12787,12575,13209,11202,13695,12504,11756,11451,12098,13701];

#print_r($originalTeam);
echo "<h4>Original team Members: </h4>";
foreach ($originalTeam as $EmpID){
	echo "$EmpID, ";
}

if(isset($_POST['tdate']) && $_POST['tdate'] > "2020-10-16"){
	echo "<h4> Date set: ". $_POST['tdate'] . "</h4>";

	$transferTeam = [];
	$remainTeam = $originalTeam; //make a copy
	//remove menbers from TEAM-2 (having 12### as EmpID)
	foreach ($remainTeam as $index => $EmpID) {
		if(intval($EmpID/1000) == 12){
			unset($remainTeam[$index]);
			array_push($transferTeam, $EmpID);
		}
	}
	echo "<hr>";
	$remainTeam = array_values($remainTeam); ##reset index values
	rsort($transferTeam); ##sort in decending order
	//print_r($transferTeam);
	echo "<h4>Transfered team (Team2): </h4>";
	foreach ($transferTeam as $EmpID){
		echo "$EmpID, ";
	}
	
	rsort($remainTeam); ##sort in decending order
	//print_r($remainTeam);
	echo "<h4>Remaining team in decending order (Team1 & 3): </h4>";
	foreach ($remainTeam as $EmpID){
		echo "$EmpID, ";
	}

}else{
	echo "<h4> Set a date after 2020-10-16 to get new teams.</h4>";
}

?>


<br><br><br>
<form method="POST">
<label for="tdate">Enter the date :</label>
<input type="date" name="tdate"> 
<input type="submit" value="Submit date">
	</form>