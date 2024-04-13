<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
<h2>String Manipulation</h2>

<pre>

<?php
echo '<br> ALL OF THESE FUNCTIONS ARE TO DO WITH STRING ';
echo "<br><br>trim(), ltrim(), rtrim()";

echo "<br><br>strtolower(), strtoupper(), ucfirst(), ucwords()<br><br>";


$my_string = '  heLLOo there mATE!!    ';

echo '1)<span style="background-color:darkblue">';
echo $my_string;
echo '</span><br><br><br>';


echo '2)<span style="background-color:darkblue">';
echo ltrim($my_string);
echo '</span><br>';

echo '3)<span style="background-color:darkblue">';
echo rtrim($my_string);
echo '</span><br>';

echo '4)<span style="background-color:darkblue">';
echo trim($my_string);
echo '</span><br><br>';

$my_string = trim($my_string);

echo '5)<span style="background-color:darkblue">';
echo strtolower($my_string);
echo '</span><br>';

echo '6)<span style="background-color:darkblue">';
echo strtoupper($my_string);
echo '</span><br>';

echo '7)<span style="background-color:darkblue">';
echo ucfirst($my_string);
echo '</span><br>';

echo '8)<span style="background-color:darkblue">';
echo ucwords($my_string);
echo '</span><br><br>';

$my_output_should_be = 'My Name Is Hamzah!!!'; 


$my_task = 'my NAME is hamzah!!!';

echo '10-task)<span style="background-color:darkblue">';
echo ($my_task);
echo '</span><br>';

// HERE IS WHERE YOU NEET TO TYPE ONLY!!!
$my_result = ucwords(strtolower(trim($my_task)));
// strtolower


echo '9-expected)<span style="background-color:darkblue">';
echo ($my_output_should_be);
echo '</span><br>';
echo '11-result)<span style="background-color:darkblue">';
echo ($my_result);
echo '</span><br><br>';

echo $my_output_should_be == $my_result ? 'pass' : 'fail';

?>

</pre>

</body>
</html>