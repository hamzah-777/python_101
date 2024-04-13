<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Interface</h2>

<p>Interfaces allow you to specify what methods a class should implement.
<br>Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".</p>

<p>Interfaces cannot hold variables. only function declarations.</p>
<p>Interface only declare functions. leave the definition part to class that implement the interface</p>
<p>An Interface allows the users to create programs, specifying the public methods that a class must implement, without involving the complexities and details of how the particular methods are implemented. It is generally referred to as the next level of abstraction. It resembles the abstract methods, resembling the abstract classes. An Interface is defined just like a class is defined but with the class keyword replaced by the interface keyword and just the function prototypes. The interface contains no data variables. The interface is helpful in a way that it ensures to maintain a sort of metadata for all the methods a programmer wishes to work on.</p>

<p>Concrete Class: The class which implements an interface is called the Concrete Class. It must implement all the methods defined in an interface. Interfaces of the same name can’t be implemented because of ambiguity error. Just like any class, an interface can be extended using the extends operator as follows</p>

<p>PHP - Interfaces vs. Abstract Classes <br>
Interface are similar to abstract classes. The difference between interfaces and abstract classes are: <br>
Interfaces cannot have properties, while abstract classes can <br>
All interface methods must be public while abstract class methods may also be private or protected <br>
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary <br>
Classes can implement an interface while inheriting from another class at the same time</p>

<?php  
  
interface MyInterfaceName{ 
  
    public function method1(); 
    public function method2(); 
  
} 
  
class MyClassName implements MyInterfaceName{ 
  
    public function method1(){ 
        echo "Method1 Called" . "\n"; 
    } 
  
    public function method2(){ 
        echo "Method2 Called". "\n"; 
    } 

    public $name;
  	public $color;

  	function __construct($nameval ,$colorval) {
    $this->name = $nameval;
    $this->color = $colorval;
    }

	function get_animal() {
	    return $this->name . ' is '. $this->color;
	  }

}  
  
//$obj = new MyClassName; 
//$obj->method1(); 
//$obj->method2(); 

$obj2 = new MyClassName("Rabbit", "White");
$obj2->method1(); 
$st1 = $obj2->get_animal();
echo ($st1);
?> 