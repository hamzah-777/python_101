<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
  index  
  <br>
  <a href="/second.php">go to second</a> <br>

  <a href="/string.php">go to string</a> <br>
  <a href="/string_manipulation.php">go to string_manipulation</a> <br>
  <a href="/tester.php">go to tester</a> <br>
  
  
  <br><br>
  <input id="name_input">

  <h3 id="name_output">Hello there</h3>

<?php

// php code here
# another way to comment

/* multi
line 

comment */
// DECLARE A VARIABLE IN PHP
$my_name = 'Dave';
// PRINT SOMETHING IN PHP
echo '<h1>' . $my_name . '</h1>';

$my_age = 12;
echo 'my age is ' . $my_age;
echo `my age is $my_age`;

?>

</body>

<script>
  //JAVASCRIPC CODE HERE
 // either say let / var / const

 // declare a variable in javascript
  let name = "Hamzah";
  console.log('name at begining is ', name);

  name = "banuka";
  console.log('2nd name at begining is ', name);

    // SOON AS SOMETHING CHANGES IN INPUT FIELD - RUN THIS CODE
  $('#name_input').change(function(){
    // GET THE VALUE FROM INPUT FIELD
    name = $('#name_input').val();

    console.log('my name changed to ', name);

    // CHANGE THE VALUE in HEADING 3 TAG
     $('#name_output').html(name);
  });

  


  </script>

</html>