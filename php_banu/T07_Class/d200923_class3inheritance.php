<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>PHP OOP - Inheritance</h2>
<p>Inheritance in OOP = When a class derives from another class.
<br>
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
<br>An inherited class is defined by using the extends keyword.</p>


<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro_pub() {
    echo "Public: The fruit is {$this->name} and the color is {$this->color}.<br>";
  }

  protected function intro_prot() {
    echo "Protected: The fruit is {$this->name} and the color is {$this->color}.<br>";
  }

  private function intro_priv() {
    echo "Private: The fruit is {$this->name} and the color is {$this->color}.<br>";
  }


}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry?" ;
  }

  public function call_prot_func(){
  	$this->intro_prot(); #can call protected meth from inherited classes
  }

  public function call_priv_func(){
  	$this->intro_priv(); #cannot do this. 
  	#inherited class cannot access private elem of parent class
  }
}


$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message(); #call method of child class
$strawberry->intro_pub(); #call method of parent class public

echo "<p>about private & protected</p>";

# $strawberry->intro_prot(); ##cannot call protected/ private stuff from outside
$strawberry->call_prot_func(); ##call protected meth via public meth in child

# $strawberry->call_priv_func(); #cannot call private meth from child class


?>


