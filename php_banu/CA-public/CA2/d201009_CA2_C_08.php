<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<xmp>8. Explain the concept and write a relevant program to demonstrate the constructors along
with inheritance in a PHP class using a relevant real-life situation. Explain the program and
try to use simple, relevant but unique situation.
</xmp>
<style>
	body {background-color: aquamarine; }
	.pl{color:darkblue;}
	.pll{color:red;}
	.bt{color:purple;}
	.bw{color:gray;}
	.wk{color:brown;}
</style>

<?php
#super-class CricketPlayer has 1 constructor, 1 final function and one function that gets overridden
class CricketPlayer {
	protected $name;
	protected $team;
	protected $position;
	protected $shirtNo;
	#this constructur is called from child class's constructor, when derived class object is created.
	function __construct($name, $team, $position, $shirtNo){
		$this->name = $name;
		$this->team = $team;
		$this->position = $position;
		$this->shirtNo = $shirtNo;
	}
	#in php final keyword prevent child classes from overriding a method.
	final function getPlayer(){
		return '<h3 class=pl>'. $this->name . ' is a ' . $this->position .' in team: '. $this->team .' with shirt No: '. $this->shirtNo ;
	}
    #this is a normal funciton, open to be overridden by child classes.
	function getStats(){
		return '<h4 class=pll>'. $this->name .' has no Stats set yet.';
	}
}

#batsman sub-class derived/inherited from base-cricketplayer
#it overides the super-class' constructor and getStats function
#batsman class's constructor accept 6 data values. only 3 are required for object creation
class Batsman extends CricketPlayer {
	protected $battingAvg;
	protected $runs;
	protected $matches;
	#constructor has default values set for battingavg, runs & matches 
	#if those were not passed on object creation
	function __construct($name, $team, $shirtNo, $battingAvg=0, $runs=0, $matches=0){
		#call the parent-class constructor
		parent::__construct($name, $team, "Batsman", $shirtNo);
		$this->battingAvg = $battingAvg;
		$this->runs = $runs;
		$this->matches = $matches;
	}
	function getStats(){
		return '<h4 class=bt>'. $this->name .' scored: '. $this->runs . ' across: ' . $this->matches .' matches, with a batting average of: '. $this->battingAvg ;
	}
}

#Bowler sub-class inherited from base-cricketplayer
class Bowler extends CricketPlayer {
	protected $bowlingAvg;
	protected $wickets;
	protected $matches;
	function __construct($name, $team, $shirtNo, $bowlingAvg=0, $wickets=0, $matches=0){
		parent::__construct($name, $team, "Bowler", $shirtNo);
		$this->bowlingAvg = $bowlingAvg;
		$this->wickets = $wickets;
		$this->matches = $matches;
	}
	function getStats(){
		return '<h4 class=bw>'. $this->name .' took: '. $this->wickets .' wickets across: '. $this->matches .' matches, with a bowling average of: '. $this->bowlingAvg ;
	}
}

#WicketKeeper sub-class derived from base-cricketplayer
class WicketKeeper extends CricketPlayer {
	protected $stumpingAvg;
	protected $wickets;
	protected $matches;
	function __construct($name, $team, $shirtNo, $stumpingAvg=0, $wickets=0, $matches=0){
		parent::__construct($name, $team, "Wicket_Keeper", $shirtNo);
		$this->stumpingAvg = $stumpingAvg;
		$this->wickets = $wickets;
		$this->matches = $matches;
	}
	public function getStats(){
		return '<h4 class=wk>'. $this->name .' took: '. $this->wickets .' wickets across: '. $this->matches .' matches, with a stumping average of: '. $this->stumpingAvg ;
	}
}

#-------------creating objects and calling functions---------
#create object from base-class CricketPlayer for comparision. calling getStats give the baseclass function.
$player001 = new CricketPlayer("Malcolm Marshall","WI","Bowler",54);
echo $player001 ->getPlayer();
echo $player001 ->getStats();
echo "<hr>";

#create object from sub-class Batsman. calling getStats give the derived-class overridden function
$player1 = new Batsman("Mahela Jayawardena","SL", 11, 103.4, 4534, 104);
echo  $player1 ->getPlayer();
echo  $player1 ->getStats();
echo "<hr>";

#create object from sub-class Bowler. calling getStats give the derived-class overridden function
$player2 = new Bowler("Johnny Briggs","ENG", 71, 53.4, 64, 14);
echo $player2 ->getPlayer();
echo $player2 ->getStats();
echo "<hr>";

$player3 = new WicketKeeper("Kumar Sangakkara","SL", 34, 59.4, 94, 23);
echo  $player3 ->getPlayer();
echo $player3 ->getStats();
echo "<hr>";

#create object from sub-class Batsman, but passing only minumum arguments (3)
#here other player stats will be set to defaut value - 0
$player4 = new Batsman("Sajjad Hassan","IND", 31);
echo $player4 ->getPlayer();
echo $player4 ->getStats();
echo "<hr>";
?>