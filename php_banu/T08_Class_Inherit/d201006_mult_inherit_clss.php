<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<h2>Interface - multiple inheritance - using mix of class & interfaces</h2>

<?

Interface intf1{
	public function f1();
}
Interface intf2{
	public function f2();
}

class Cls1{
	function f3(){
		echo "<br>Function-3 being performed.";
	}
}

class Cls2 extends cls1 implements intf1,intf2{
	function f1(){
		echo "<br>Function-1 being performed.";
	}
	function f2(){
		echo "<br>Function-2 being performed.";
	}

}

$obj= new Cls2();
$obj->f1();
$obj->f2();
$obj->f3();

?>
