<?php

declare(strict_types=1);

class myClass {
	public $prop1 = "I'm a class property!";
	private static $count = 0;
	
	public function __construct() {
		echo 'The class "', __CLASS__,'" was initiated! <br>';
	}
	
	public function __destruct() {
		echo 'The class "', __CLASS__,'" was destroyed. <br>';
	}
	
	public function __toString() {
		echo "Using the toString methods";
		return $this->getProperty();
	}
	
	public function setProperty(string $newwal) {
		$this->prop1 = $newwal;
	}
	
	public function getProperty() : string {
		return $this->prop1 . " <br />";
	}
	
	public static function getCount() : int {
		return self::$count;
	}
	
	public static function plusOne() {
		echo "The count is " . ++self::$count . " <br>";
	}
}

class MyOtherClass extends myClass {
	public function __construct() {
		parent::__construct(); // call the parent class's constructor
		echo "A new Constructro in " . __CLASS__ . ".<br />";
	}
	
	public function newMethod() : string {
		return " From a new method in " . __CLASS__ . " <br />";
	}
	
	public function callProtectedMethod() : string {
		return $this->getProperty();
	}	
}
/*
do {
	myClass::plusOne(); // DISPLAY 1-10
} while(myClass::getCount() < 10);*/


// Create a new object
/*$newObj = new MyOtherClass;
echo $newObj->newMethod();
echo $newObj->callProtectedMethod();
*/

/* Level 1
$obj = new myClass;
var_dump($obj);
echo $obj->prop1;*/

// $obj = new myClass;
// $obj->setProperty("I'm a new property value!");
// echo $obj->getProperty();

// level 2
// create two objects
// $obj1 = new myClass;
// $obj2 = new myClass;

// get the value of $prop1 from both objects
// echo $obj1->getProperty();
// echo $obj2->getProperty();

// Level 3 
$obj = new myClass;
echo $obj->getProperty();
unset($obj);
echo "End of file. <br />";