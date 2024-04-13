<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Access Modifiers</h2>
<p>public - the property or method can be accessed from everywhere. This is default <br>
protected - the property or method can be accessed within the class and by classes derived from that class <br>
private - the property or method can ONLY be accessed within the class</p>

<p>to change private/protected properties of obj, will need to make use of class methods<p>


<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;

   function set_color($n) { // a public function by default
    $this->color = $n;}

    protected function set_weight($n){ //pivate & protected func cannot be accessed form outside
    	$this->weight = $n;
    }
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
# $mango->color = 'Yellow'; // ERROR
# $mango->weight = '300'; // ERROR

$mango->set_color('Red'); // works fine

# $mango->set_weight('20'); //cannot call private/protected methods from outside.

?>