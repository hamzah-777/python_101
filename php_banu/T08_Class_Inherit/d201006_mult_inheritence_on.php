<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<h2>Interface - multiple inheritance</h2>

<p>Multiple Inheritance is the property of the Object Oriented Programming languages in which child class or sub class can inherit the properties of the multiple parent classes or super classes.
<br>PHP doesn’t support multiple inheritance but by using Interfaces in PHP or using Traits in PHP instead of classes, we can implement it.
</p>

<h3>Interface (Using Multiple Interface)</h3>

<?php 
  
interface C { 
   public function insideC(); 
} 
  
interface B { 
   public function insideB(); 
} 
  
class Multiple implements B, C { 
  
    // Function of the interface B 
    function insideB() { 
        echo "<h5>I am in interface B</h5>"; 
    } 
  
    // Function of the interface C 
    function insideC() { 
        echo "<h5>I am in interface C</h5>"; 
    } 
  
    public function insidemultiple() 
    { 
        echo "<h5>I am in inherited class</h5>"; 
    } 
} 
  
$geeks = new multiple(); 
$geeks->insideC(); 
$geeks->insideB(); 
$geeks->insidemultiple(); 
?> 


<h3>Interface (Using Class along with Interface)</h3>

<?php 
  
class X { 
   public function insideX() { 
    echo "<h5>I am in class X</h5>"; 
     } 
} 
  
interface Y { 
   public function insideY(); 
} 
  
class Multiple2 extends X implements Y { 
  
    function insideY() { 
        echo "<h5>I am in interface</h5>"; 
    } 
  
    public function insidemultiple() { 
    echo "<h5>I am in inherited class</h5>"; 
    } 
} 
  
$geeks = new Multiple2(); 
$geeks->insideX(); 
$geeks->insideY(); 
$geeks->insidemultiple(); 
?> 


<h3>Traits (Using Multiple Traits)</h3>
<p>Multiple Traits can be inserted into a class by listing them in the use statement, separated by commas.</p>

<?php 
  
// trait Geeks 
trait Geeks { 
  public function sayhello() { 
     echo "Hello"; 
   } 
 } 
  
// trait forGeeks 
trait forGeeks { 
  public function sayfor() { 
     echo " Geeks"; 
   } 
 } 
  
class Sample { 
  use Geeks; 
  use forGeeks; 
  public function geeksforgeeks() { 
      echo "<h5>GeeksforGeeks</h5>"; 
   }  
} 
  
$test = new Sample(); 
$test->sayhello(); 
$test->sayfor(); 
$test->geeksforgeeks(); 
?> 