<?
class Employee {
	public $name;
	private $constant;
	protected $salary;

	function __construct($v1="Banu", $v2="Tester", $v3=5000) {
    $this->name = $v1;
    $this->constant = $v2;
    $this->salary = $v3;
  	}

  	public function getConstantVal(){
  		return $this->constant;
  		# this public function allow private value - constant to be modified from outside of class
  	}
}

class Manager extends Employee{
	function getEmployeeInfo(){
		echo "<h3> {$this->name} is a {$this->getConstantVal()}  getting paid {$this->salary} Rupees </h3>";
	}
} 

echo "<h4>default constructor values passed to manager object</h4>";

$manager1 = new Manager();
$manager1->getEmployeeInfo();


echo "<h4>User specified values passed to object of manager</h4>";
$manager2 = new Manager("Sam","Programmer",3000);
$manager2->getEmployeeInfo();

?>


<pre>
name public
contact private
salary protected

Another class Manager inherits the class Employee.

Show how Manager can print the details of the Employees?
</pre>