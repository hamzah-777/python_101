<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<html>
<body>


<form action="" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php 
if(isset($_POST["name"]) and isset($_POST["email"])){

	echo "<h3>Welcome: ", $_POST["name"];
	echo "<h3>Your email address is: ", $_POST["email"];
}
?>


</body>
</html>


