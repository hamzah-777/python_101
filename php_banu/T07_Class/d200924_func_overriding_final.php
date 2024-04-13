<p>Function overriding is same as other OOPs programming languages. In function overriding, both parent and child classes should have same function name with and number of arguments.</p>

<p>PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.</p>

<p>we can use final on methods & class aswell, then they can not be inherited.</p>


<?php 
// PHP program to implement  
// function overriding 
  
// This is parent class 
class P { 
    public $salary = 2000;
    // Function geeks of parent class 
    function geeks() { 
        echo "<h3>Parent</h3>"; 
    } 

    final function setsalary(){
    	$this->salary = 5000;
    	echo $this->salary ;
    }
} 
  
// This is child class 
class C extends P { 
      
    // Overriding geeks method 
    function geeks() { 
        echo "<h3>Child</h3>"; 
    } 

    # cannot do this. cannot overide final func
    // function setsalary(){
    // 	$this->salary = 8000;
    // 	echo $this->salary ;
    // } 

} 
  
// Reference type of parent 
$p = new P; 
  
// Reference type of child 
$c= new C; 
  
// print Parent 
$p->geeks(); #call parent's func
$p->setsalary(); #call parent's func
  
// Print child 
$c->geeks(); #call overidden func from child
$c->setsalary(); # call func from parent

//final class - cannot be extended (derived from)
final class X { 
	function yolo() { 
        echo "<h3>Parent</h3>"; 
    } 
}

//cannot do this. cannot extend a final class
//FATAL ERRO: Class Y may not inherit from final class
/*
class Y extends X {
	function yolo() { 
        echo "<h3>Child</h3>"; 
    } 
}
*/
?> 