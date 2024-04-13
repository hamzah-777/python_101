<html>
    <head><title>Question D-1</title></head>
    <body>
        <a href="./"><h2>GO back to LPU FOLDER</h1></a>

        <form>
            Basic Salary : <input type="text" name="sal"  />
            <input type="submit" name="calc" value="Calculate" /><br />
        </form>
        
    
    <?
        if( isset($_GET['calc']) ){
            
           echo '<form><input type="submit" value="Reload Page"></form>'; 
            
            if( !is_numeric($_GET['sal']) ){
                echo '<br /> Enter numeric value.';
                exit;
            }
            
            $sal = $_GET['sal'];
            $hra = $sal*0.14;
            $ta = $sal*0.06;
            $totsal = $sal+$hra+$ta;
            echo "<br /> Basic Salary : $sal";
            echo "<br /> HRA : <input type='text' value= $hra >";
            echo "<br /> TA : <input type='text' value= $ta >";
            echo "<br /> Total Salary : <input type='text' value= $totsal >";
                   
        }//end if isset        
        
    ?>
    
    
    
    
    
    </body>
</html>