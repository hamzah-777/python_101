<?php
$qnum = "Question B2";
?>

<!DOCTYPE html>
<html>
<head><title>PHP Questions</title></head>
<body>
<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h1><?= htmlentities($qnum); ?> </h2>
<xmp>Write a PHP program to read 3 subject marks and to fine total and average. To
display the result based on the following data.
Average more than 90  Excellent
Average between 80 to 90  Very Good
Average between 70 to 80  Good
Average between 50 to 70  Average
Average less than 50  Fail</xmp><br />
    
    
<form>
Subject 1 : <input type="text" name="val1" size="10" value= <? echo isset($_GET['val1']) ? $_GET['val1'] : '' ?> ><br />
Subject 2 : <input type="text" name="val2" size="10" value= <? echo isset($_GET['val2']) ? $_GET['val2'] : '' ?> ><br />
Subject 3 : <input type="text" name="val3" size="10" value= <? echo isset($_GET['val3']) ? $_GET['val3'] : '' ?> ><br /><br />
 
<input type="submit" value="Compute" name="compute" />
<br /><br />
</form>
    


    <?
    if ( isset($_GET['compute']) ){
        
        echo '<form><input type="submit" value="Reload Page"></form>';  
        
        $val1 = $_GET['val1'];
        $val2 = $_GET['val2'];
        $val3 = $_GET['val3'];
        
        if ( !is_numeric($val1) || !is_numeric($val2) || !is_numeric($val3) ){
        echo "<br /> Enter numeric only";
        exit;
        }
        
        $sum = $val1 + $val2 + $val3;
        $avg = round($sum/3,3);
        
        switch($avg){
            case $avg > 100 || $avg < 0 :
                echo "<br /> Average must be 0-100. check input";
                exit;
                break;
            default:    
                echo "<br /> Total : $sum / 300";
                echo "<br /> Average : $avg % <br />";
        }//end 1st switch
               
                
        switch($avg){        
            case $avg >= 90 :
                echo "<br /> Excellent";
                break;
            case $avg >= 80 :
                echo "<br /> Very Good";
                break;
            case $avg >= 70 :
                echo "<br /> Good";
                break;
            case $avg >= 50 :
                echo "<br /> Average";
                break;
            case $avg >= 0 :  
                echo "<br /> Fail";
                break;
            default:
                echo "<br /> Average cannot be over under 0. check input";
                break;
        }//end 2nd switch
    
    }//end if get
    
    ?>
    
    
</body>
</html>