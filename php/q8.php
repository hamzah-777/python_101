<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Electricity Bill Calculator</h1>
<pre>
    Rates:
For first 50 units – $ 3.50/unit
For next 100 units – $ 4.00/unit
For next 100 units – $ 5.20/unit
For units above 250 – $ 6.50/unit

</pre>
<form method="post">
<label>Enter Units:</label><br>
<input type="number" name="my_input" min='-1000' max='10000' >

<br><input type="submit" value="Submit">
<button onclick="doReload()">Reset</button>
</form>
<br>


    <?php
$uc_1 = 3.50; //50-
$uc_2 = 4.00; //100-
$uc_3 = 5.20; //100-
$uc_4 = 6.50; //250 ++

$units = 0;
$cost = 0;

// $cost = $units * $uc_1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = +$_POST['my_input'];

if( $units <= 50 ){
    $cost = $units * $uc_1; //50-
} else if( $units <= 150 ){
    $cost = (50 * $uc_1) + (($units-50) * $uc_2); //100-
} else if ( $units <= 250 )  {
    $cost = (50 * $uc_1) + (100 * $uc_2) + (($units-150) * $uc_3); //100-
} else {
    // 300 - 50 = 250 - 100 = 150 - 100 = 50
    // = (50 * 3.5) + (100 * 4) + ( 100 * 5.2 ) + (50 * 6.5)
    $cost = (50 * $uc_1) + (100 * $uc_2) + (100 * $uc_3) + (($units-250) * $uc_4); //250++
}


echo 'Units used: ' . $units . '<br>';
echo 'You have to pay: $ ' . $cost . '<br>';
}
    ?>
</body>
</html>