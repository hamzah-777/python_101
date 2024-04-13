<!DOCTYPE html>
<html>

<head>
    <title>PHP String Manipulation and Comparison</title>
</head>

<body>
    <h2>PHP String Manipulation and Comparison</h2>
    <form method="post">
        <label>Enter Text:</label><br>
        <input type="text" id="text_input" name="text_input"><br><br>
        <input type="submit" value="Submit">
        <button onclick="doReload()">Reset</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_text = $_POST['text_input'];

        // Example string manipulation and comparison functions
        echo "<h3>Results:</h3>";
        echo "Original Text: $input_text <br>";

        // Example functions
        echo "Uppercase: " . strtoupper($input_text) . "<br>";
        echo "Lowercase: " . strtolower($input_text) . "<br>";
        echo "Length: " . strlen($input_text) . "<br>";
        echo "Word Count: " . str_word_count($input_text) . "<br>";
        // You can add more functions to demonstrate here

        // Example comparisons
        $comparison_string = "example";
        echo "<h4>Comparison with '$comparison_string':</h4>";
        if ($input_text == $comparison_string) {
            echo "Strings are equal.<br>";
        } else {
            echo "Strings are not equal.<br>";
        }
        // You can add more comparison examples here
    }
    ?>

    <script>
        function doReload() {
            window.reload();
        }
    </script>

</body>

</html>