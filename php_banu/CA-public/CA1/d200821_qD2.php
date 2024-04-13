<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<form>
Multiply by: <input type="text" name="mult" /><br />
Range Start: <input type="text" name="strt" /><br />
Range End : <input type="text" name="end" /><br /><br />
<input type="submit" name="submit" value="Get Math Table" /><br />
</form>

<?
if( isset($_GET['submit']) ){
    
    if( !is_numeric($_GET['mult']) || !is_numeric($_GET['strt']) || !is_numeric($_GET['end']) ){
        echo "numerics expected";
        exit;
    }
    
    $mult = (int)$_GET['mult'];
    $strt = (int)$_GET['strt'];
    $end = (int)$_GET['end'];
    
    if( $strt > $end ){
        [$strt, $end] = [$end, $strt];
    }
    
    for($i=$strt; $i<=$end; $i++){     
        echo " $mult * $i = ", $mult*$i ,"<br />";  
    }

}//end if isset

?>