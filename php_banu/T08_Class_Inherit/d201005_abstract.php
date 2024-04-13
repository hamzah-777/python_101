<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Abstract Classes and Methods</h2>

<p>Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
<br>An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
<br>An abstract class or method is defined with the abstract keyword:</p>

<p>So, when a child class is inherited from an abstract class, we have the following rules:
<br>The child class method must be defined with the same name and it redeclares the parent abstract method <br>
The child class method must be defined with the same or a less restricted access modifier <br>
The number of required arguments must be the same. However, the child class may have optional arguments in addition</p>

<p>cannot instattiate (create object) of abstract class. can only do so a non-abstract child class.</p>
<p>abstract methods are declared  in super class (parent)( must be abstract class) <br>
abstract methods are defined in non-abstract child class ??</p>
<p>a class can have combination of abstract and non-abstract methods
<br>even one method in class is declared as abstract, class msut be abstract too</p>

<pre>Declaration........Declaration says "this thing exists somewhere"
Declaration, generally, refers to the introduction of a new name in the program. For example, you can declare a new function by describing it's "signature":
void xyz();

or declare an incomplete type:
class klass;
struct ztruct;

and last but not least, to declare an object:
int x;</pre>

<pre>Definition..........Definition says "this thing exists here; make memory for it"
A definition is a definition of a previously declared name (or it can be both definition and declaration). For example:

int x;
void xyz() {...}
class klass {...};</pre>

<pre>Initialization... create obj
Initialization refers to the "assignment" of a value, at construction time. For a generic object of type T, it's often in the form:
T x = i;</pre>

<h3>

<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>