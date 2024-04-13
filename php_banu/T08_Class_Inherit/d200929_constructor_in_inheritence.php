<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Constructor with inheritance</h2>

<p>Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private)</p>

<?
class Animal {
  public $name;
  public $color;

  function __construct($nameval ,$colorval) {
    $this->name = $nameval;
    $this->color = $colorval;
    }

  function get_animal() {
    return $this->name . ' is '. $this->speed;
  }
}

class Mammel extends Animal {
	public $food;
	function __construct($nameval ,$colorval, $foodval) {
		parent::__construct($nameval ,$colorval);
		$this->food = $foodval;
	}

	function get_mammel() {
    return $this->name . ' is '. $this->color. ' & eat '. $this->food;
  }
}

$mam1 = new Mammel("Elephant","Black","Leaves");


echo "<h3>";
echo $mam1 -> get_mammel();

?>