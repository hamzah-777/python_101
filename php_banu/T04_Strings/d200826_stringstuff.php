<a href="./"><h2>GO back to LPU FOLDER</h1></a>


<?
$n = 4.323231;
printf("%%d = '%d'<br>", $n);
printf("\n");
printf("%%d = '%d'\n", $n);

printf($n, "\n");

printf("Hello%s",'<br>');
printf("Hello\n");
printf("%s<br>", $n);
printf("%s\n", $n);
printf("%s\n", $n);
printf($n . "\n"."hi");

printf("hello" . "%s", "\n");
printf("hello" . "%s", "\n");

$ab = "<br>Hello\t\t yoo<br> WOrld";

echo "<pre>".$ab."</pre>";
?>
<hr><hr>
<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'funcFoo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;
echo "<hr>";

echo nl2br(<<<EOT
This is 
a multiline
string type
EOT);
echo "<hr>";

print(nl2br("Hello \nthere\n freinds"));


?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>