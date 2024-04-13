<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Class and Object</h2>
<p>A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:</p>

<p>Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.<br>
Objects of a class is created using the new keyword.</p>
<p>The $this keyword refers to the current object, and is only available inside methods.</p>
<p>Object operator -> can be used to access elements (func & val) of object. (works like dot operator in other OOP lang</p>
<p>You can use the instanceof keyword to check if an object belongs to a specific class:</p>
<p><b>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case sensitive but all variable names are case-sensitive.</b></p>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($nameval) {
    $this->name = 'My-'.$nameval;
  }
  function get_name() {
    return $this->name;
  }

    function set_color($colorval) {
    $this->color = $colorval;
  }
  function get_color() {
    return $this->color;
  }
}

echo "<h3>";

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple'); #access obj via function
$banana->name = 'Banana'; #drrectly change property value (only public prop)

echo $apple->get_name(); #access obj via function
echo "<br>";
echo $banana->get_name(); #access obj via function
echo "<br>";

$apple->set_color('Red');
echo "Color: " . $apple->get_color();
echo "<br><br>";

$mango = new Fruit();
var_dump($mango instanceof Fruit); #check if object belong to given class



echo "</h3>";

?>
