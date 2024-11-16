<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grader</title>
</head>
<body>
    <?php
/*
Write a program to check student grade based on the marks using if-else statements.

Conditions:
If marks are 60% or more, grade will be First Division.
If marks between 45% to 59%, grade will be Second Division.
If marks between 33% to 44%, grade will be Third Division.
If marks are less than 33%, student will be Fail.

*/

$marks = 50;
$grade = "";

if ($marks>=60){
    $grade = "First Division";
}
elseif ( $marks>=45)  
{
    $grade = "Second Division";
}
elseif ( $marks>=33 )
{
    $grade = "Third Division";
}
else 
{
    $grade = "Fail";
}

echo "Student has grade -". $grade;
   


?>
</body>
</html>