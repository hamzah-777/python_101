<a href="./"><h2>GO back to LPU FOLDER</h1></a>

	<h2>PHP OOP - Static Methods</h2>
<p>Static methods can be called directly - without creating an instance of a class. <br>
Static methods are declared with the static keyword</p>


	<?php
class sayhi {
  public static function welcome() {
    echo "<h3>Hello World!</h3>";
  }
}

// Call static method - no need to make object of class
sayhi::welcome(); 
?>

<p>Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static cannot be accessed with an instantiated class object (though a static method can).
<br>visibility by default is public</p>

<p>Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static.</p>

<p>A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::)</p>


<?php
class greeting {
  public static function welcome() {
    echo "<h4>Hello World!</h4>";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>

<p>Static methods can also be called from methods in other classes. To do this, the static method should be public:</p>

<?
class SomeOtherClass {
  public function message() {
    greeting::welcome(); //call function from greeting class
  }
}

$obj3 = new SomeOtherClass();
$obj3 -> message();

?>

<p>To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.</p>

<?php
class domain {
  protected static function getWebsiteName() {
    return "<h3>http://banuka.epizy.com/Hangman_v3/</h3>";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>

<h2>PHP - Static Properties / values</h2>

<p>Static properties can be called directly - without creating an instance of a class. <br>
Static properties are declared with the static keyword: <br>
To access a static property use the class name, double colon (::) <b>
Scope Resolution Operator </b>, and the property name
</p>

<?php
class pi1 {
  public static $value = 3.14159; //remain same for all objects
  public $name = "Banu"; //every object will have own copy
  
  function setpi1($n)
  {
	  $this->name = $n;
	  }
	function getpi1()
	  {echo "...".$this->name;
	  echo self::$value; //access static val within
	  }
}

// Get static property. no need to create object of class
echo "<br>Get static property: ", pi1::$value;
pi1::$value = 3.1;
echo "<br>Changed static property: ", pi1::$value;

?>

<p>A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the <b>self</b> keyword and double colon (::)</p>

<?php
class pi2 {
  public static $value=3.999;
  public function f1_callstatic() {
    return self::$value; //way 1 - access static value within class- use self keyword
    //return pi2::$value; //way 2 -using class name

  }
  // public function f2_callstatic(){
  //   return $this->value;  //cannot do this. //EROR: Accessing static property pi2::$value as non static
  // }
}


//access static variable without creating object
echo "<br>static value without obj ", pi2::$value;

$piobj = new pi2();
echo "<br>static value called from class",$piobj->f1_callstatic();


// echo $piobj->f2_callstatic();
?>

<p>To call a static property from a child class, use the <b>parent</b> keyword inside the child class: </p>

<?php
class pi_parent {
  public static $value=3.14159;
}

class x extends pi_parent {
  public function xStatic() {
    return parent::$value;
    # return $this->value; ##cannot do this. ERROR:  Accessing static property x::$value as non static in
  }
}

// Get value of static property directly via child class
echo x::$value;
echo "<br>";
// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();




?>