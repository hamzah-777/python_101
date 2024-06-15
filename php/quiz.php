<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php  
  echo "hello hamzah";
echo '<br>';


$name="hamzah";

echo $name;

echo '<br>';
echo '<br>';


// $cars = array["Volvo", "BMW", "Toyota"];
// echo '<br>1' . $cars;
// $cars = "Volvo", "BMW", "Toyota";
// echo '<br>2' . $cars;
$cars = array("Volvo", "BMW", "Toyota");
echo '<br>3' . var_dump($cars);
echo '<br>';
echo '<br>';
$cars = ["Volvo", "BMW", "Toyota"];
echo '<br>4' . print_r($cars);

// if they are of age 18 or over, print out ‘Adult’.
$age = 17.5; // << assigning value... it's saying it is... it's NOT ASKING!!!



// here you need to ASK .. IS IT 18 ???? it's a QUESTIONNNNNN
// --- if ($age == 18 || $age > 18 ) 
if ($age >= 18) 
{
  echo 'Adult';
}
else 
{
  echo 'Not an Adult';
}


  ?>



</body>
</html>