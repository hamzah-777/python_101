<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Constructor & destructor</h2>
<p>A constructor allows you to initialize an object's properties upon creation of the object.
<br>
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
<br> using a constructor saves us from calling the set_name() </button></p>
<hr>
<p>A destructor is called when the object is destructed or the script is stopped or exited.
<br>
If you create a __destruct() function, PHP will automatically call this function at the end of the script. <br>
The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:</p>

<?php
echo "<h3>";

##constructor stuff
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}


$apple = new Fruit("Apple");
echo $apple->get_name();
echo "<br><br><br>";

##constructor with default values.
class Flower {
  public $name;
  public $color;

  #constructor here can accept 2 param. bot only name is requred. color has default set to red.
  function __construct($nameval ,$colorval="Red") {
    $this->name = $nameval;
    $this->color = $colorval;
    }
  function get_flower() {
    return $this->name . ' is '. $this->color;
  }

  #A destructor is called when the object is destructed or the script is stopped or exited.
  function __destruct() {
    echo "<br>Destroy flower {$this->name} with color {$this->color}.";
  }

}

$flow1 = new Flower("Daffodil"); #object with default color (pass only 1 arg)
echo $flow1->get_flower();

echo "<br>";
$flow2 = new Flower("Lilly","Blue"); #object with default color overide by user
echo $flow2->get_flower();



echo "</h3>";
?>

<br><i>end of HTML prog</i><br>