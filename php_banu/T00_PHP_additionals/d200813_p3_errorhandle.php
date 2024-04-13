<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1>Welome to PHP 101. </h1>
<h4> by Banuka Vidusanka. <i>Date: 2020.08.12</i></h2>

<h4>Welcome to Quizz</h4>
<xmp>
</xmp>
<hr>

<?php
function inverse($x) {
	//if $x = 0 -> !$x would be (1)true
    if (!$x) {
        throw new Exception('<br>Division by zero.<br>');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br>";
}

// Continue execution
echo "Hello World<br>";
?>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>