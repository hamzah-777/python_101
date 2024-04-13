<a href="./"><h2>GO back to LPU FOLDER</h1></a>

<h2>PHP - Class Constants</h2>
<p>Constants cannot be changed once it is declared. <br>
Class constants can be useful if you need to define some constant data within a class. <br>
A class constant is declared inside a class with the const keyword. <br>
We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name</p>
<p>const is bit similar to static variable, both accessible without making object. both belong to class(not object). static can be changed, const cannot.</p>
<?php
class Goodbye {
  const LEAVING_MESSAGE = "<h3>Thank you for visiting W3Schools.com!</h3>";


public function callbye(){
	# call from inside class using self::
	echo self::LEAVING_MESSAGE;
}

}
echo "from outside class. no need to create object of class.<br>";
echo Goodbye::LEAVING_MESSAGE;
?>

<p>Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name</p>

<?
echo "from outside class. need to craete obj. here using class method to call";
$goodbye = new Goodbye();
$goodbye->callbye();
?>