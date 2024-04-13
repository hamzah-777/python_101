<a href="./"><h2>GO back to LPU FOLDER</h1></a>

<?

echo "<u>Normal function:</u><br><br>";
function greeting($name)
{
	 echo "Greetings : $name <br>";
}
greeting('Salman Khan');
greeting('Tom Cruise');

#annonymous functions are expressions, we we assign it to a variable
echo "<u><br><br>Annonymous function:</u><br><br>";
$greet = function($name)
{
    echo "Hello : $name <br>";
};
$greet('James Bond');
$greet('Dwayne Johnson');

echo gettype($greet) ."<br>";
echo var_dump($greet);


echo "<u><br><br>Annonymous function return string:</u><br><br>";
$greet = function($name)
{
    return "Hi : $name <br>";
};
echo $greet('James Bond');
echo $greet('Dwayne Johnson');

##return type here is string
echo gettype($greet('James Bond')) ."<br>";
?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>