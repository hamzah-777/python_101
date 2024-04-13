<!DOCTYPE html>
<html>

<head>
    <title>PHP String Manipulation and Comparison</title>
</head>

<body>
    <h2>PHP String Manipulation and Comparison</h2>
    <form method="post">
        <label>Enter Text 1:</label><br>
        <input type="text" id="input1" name="input1" maxlength="20"><br>
        <label>Enter Text 2:</label><br>
        <input type="text" id="input2" name="input2" maxlength="20"><br><br>
        <br><input type="submit" value="Submit">
        <button onclick="doReload()">Reset</button>
    </form>

    <?php
    $angryyyyy = 'angry 1';
    $happyyyyy = 'happy 2';

    // $angryyyyy = $happyyyyy;
    
    echo "angry - $angryyyyy , happy - $happyyyyy <br>" ;
    echo "<br><br>" ;

    //  >  <   >=  <=  !=  ==

    $happyyyyy != $angryyyyy;

    $boy = 15;
    $girl = 15;

    echo "girl is $girl and... boy is $boy <br>";

    if ( $boy == $girl ) {
        echo 'both are of same age';
    } elseif ( $boy > $girl ){
        echo 'boy is older';
    } else {
        echo 'girl is older';
    }

    
    echo "<br><br>" ;

    echo "3) angry - $angryyyyy , happy - $happyyyyy <br>" ;

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_text = $_POST['input1'];
        $input_text2 = $_POST['input2'];

        // Example string manipulation and comparison functions
        echo "<h3>Results:</h3>";
        echo "Original Text 1: $input_text <br>";
        echo "Original Text 2: $input_text2 <br>";

        echo "strlen: " . strlen($input_text) . "<br>";
        echo "str_word_count: " . str_word_count($input_text) . "<br>";
        echo "<br>";

        // CHANGING STRING CASE to upper lower etc
        echo "strtoupper: " . strtoupper($input_text) . "<br>";
        echo "strtolower: " . strtolower($input_text) . "<br>";
        echo "ucfirst: " . ucfirst($input_text) . "<br>";
        echo "ucwords: " . ucwords($input_text) . "<br>";
        echo "<br>";

        // REMOVING STRING spaces @ front & back
        echo "ltrim: " . ltrim($input_text) . "<br>";
        echo "rtrim: " . rtrim($input_text) . "<br>";
        echo "trim: " . trim($input_text) . "<br>";
        echo "<br>";

        // COMPARE STRINGS - concidering / ignoring case
        // echo "Exact Comparison =="

        

        // Example comparisons
        $comparison_string = "example";
        echo "<h4>Comparison with '$comparison_string':</h4>";
        if ($input_text == $comparison_string) {
            echo "Strings are equal.<br>";
        } else {
            echo "Strings are not equal.<br>";
        }
        // You can add more comparison examples here


        $seceret_password = 'london123';

        if ( $input_text2 == $seceret_password ) {
            echo '<br>password is correct';
        } else {
            echo '<br>password is wrong';
        }

    }
    ?>

    <script>
        function doReload() {
            window.reload();
        }
    </script>

</body>

</html>