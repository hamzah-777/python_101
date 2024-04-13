<a href="./"><h6>GO back to LPU FOLDER</h6></a>
<xmp>9. Explain the concept and write a relevant program to demonstrate the use of interface in PHP
using a relevant real-life situation. Try to use simple, relevant but unique situation.
</xmp>
<style>
	body {background-color: powderblue; }
	.s1{color:blue;}
	.s2{color:red;}
	.s3{color:purple;}
	.s4{color:gray;}
	.s5{color:brown;}
	.s6{color:green;}
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 5px;
	}	
</style>

<?php
#Shape is the grand-parent layer.
#Shape has 1 method declared drawShape that can be implemented in any of the sub-classes
interface Shape{
	public function drawShape();
}

#Shape_2D & Shape_3D are 2 interfaces extended from inerface Shape. (equivilent to parent layer)
#Shape_2d declare function getArea & SHape_3d has getVolume. any sub classes of those can implement the functions
interface Shape_2D extends Shape{
	public function getArea();
}
interface Shape_3D extends Shape{
	public function getVolume();
}

#Circle,Triangle,Squre,Sphere,Pyramid,Cube - are classes that implement prior interfaces.
#they each define the already declared functions drawShape, getArea & getVolume.
class Circle implements Shape_2D{
	public $radius;
	function __construct($radius) {
		$this->radius = $radius;
	}
	public function getArea(){
		$area = pi() *$this->radius * $this->radius;
		echo "<h4 class=s2>Circle area is: $area";
	}
	public function drawShape(){
		echo "<br><img src='./CA2src/cir.png'>";
	}
}
class Triangle implements Shape_2D{
	public $base;
	public $color;
	function __construct($base) {
		$this->base = $base;
	}
	public function getArea(){
		$area = 0.25 * $this->base * $this->base * sqrt(3);
		echo "<h4 class=s4>Triangle area is: $area";
	}
	public function drawShape(){
		echo "<br><img src='./CA2src/tri.png'>";
	}
}
class Square implements Shape_2D{
	public $base;
	function __construct($base) {
		$this->base = $base;
	}
	public function getArea(){
		$area = $this->base * $this->base;
		echo "<h4 class=s6>Square area is: $area";
	}
	public function drawShape(){
		echo "<br><img src='./CA2src/sqr.png'>";
	}
}

#---------implement 3D-shape classes----------
class Sphere implements Shape_3D{
	public $radius;
	function __construct($radius) {
		$this->radius = $radius;
	}
	public function getVolume(){
		$vol = $this->radius * $this->radius * $this->radius * pi() * (4/3);
		echo "<h4 class=s1>Sphere volume is: $vol";
	}
	public function drawShape(){
		echo "<br><img src='./CA2src/sph.png'>";
	}
}
class Cube implements Shape_3D{
	public $base;
	function __construct($base) {
		$this->base = $base;
	}
	public function getVolume(){
		$vol = $this->base * $this->base * $this->base;
		echo "<h4 class=s3>Cube volume is: $vol";
	}
	public function drawShape(){
		echo "<br><img src='./CA2src/cub.png'>";
	}
}
class Pyramid implements Shape_3D{
	public $base;
	function __construct($base) {
		$this->base = $base;
	}
	public function getVolume(){
		$vol = sqrt(($this->base * $this->base * 2)/3 ) * ($this->base *$this->base *0.25);
		echo "<h4 class=s5>Pyramid volume is: $vol";
	}
	public function drawShape(){
		echo "<br><img src='./CA2src/pyr.png'>";
	}
}
?>

<?
	$base = 10; #default input set as 10
	if(isset($_POST["base"]))
	{	$base = $_POST["base"];	}
?>

<form action="" method="POST">
	Enter Base/radius/length: <input type="number" name="base"> 
	<input type="submit" value="Calculate">
	<b> Radius/Base/Length = <?= $base ?> </b>
</form>

<table>
	<tr><th>2D Objects</th>
		<td><?
		$shape001 = new Circle($base);
		$shape001->getArea();
		$shape001->drawShape();
		?></td>
		<td>
		<?
		$shape002 = new Triangle($base);
		$shape002->getArea();
		$shape002->drawShape();
		?></td>
		<td>
		<?
		$shape003 = new Square($base);
		$shape003->getArea();
		$shape003->drawShape();
		?></td>
	</tr>

	<tr><th>3D Objects</th>
		<td><?
		$shape021 = new Sphere($base);
		$shape021->getVolume();
		$shape021->drawShape();	
		?></td>
		<td><?
		$shape022 = new Cube($base);
		$shape022->getVolume();
		$shape022->drawShape();
		?>
		</td>
		<td><?
		$shape033 = new Pyramid($base);
		$shape033->getVolume();
		$shape033->drawShape();
		?></td>
	</tr>
</table>
