<?php

/**
* A simple class
*
* This is the long description for this class,
* which can span as many lines as needed. It is
* not required, whereas the short description is
* necessary.
*
* It can also span multiple paragraphs if the
* description merits that much verbiage.
*
* @author Jason Lengstorf <jason.lengstorf@ennuidesign.com>
* @copyright 2010 Ennui Design
* @license http://www.php.net/license/3_01.txt PHP License 3.01
*/

declare(strict_types=1);

class myClass {
	
    public $prop1 = "I'm a class property!";
	
    private static $count = 0;

    public function __construct() {
        echo 'The class "', __CLASS__, '" was initiated! <br />';
    }
    public function __destruct() {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }

    public function __toString() {
        echo "Using the toString method: ";
        return $this->getProperty();
    }

    public function setProperty(string $newwal) {
        $this->prop1 = $newwal;
    }
	
    // public function getProperty() : string
    protected function getProperty() : string {
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
    public function __construct()
    {
        parent::__construct(); // call the parent class's constructor
        echo "A new constructor in " . __CLASS__ . ".<br />";
    }

    public function newMethod() : string
    {
        return " From a new method in " . __CLASS__ . " <br />";
    }

    public function callProtectedMethod() : string
    {
        return $this->getProperty();
    }
}
do {
    // call plusone without instantiating myclass
    myClass::plusOne();
} while(myClass::getCount() < 10);

// Create a new object
// $newobj = new MyOtherClass;
// Output the object as a string
// echo $newobj->newMethod();
// Use a method from the parent class
// echo $newobj->callProtectedMethod();


// LEVEL 1
// $obj = new myClass;
// var_dump($obj);
// echo $obj->prop1;

// echo $obj->getProperty();
// $obj->setProperty("I'm a new property value!");
// echo $obj->getProperty();

// LEVEL 2
// CREATE TWO OBJECTS
// $obj1 = new myClass;
// $obj2 = new myClass;

// // get the value of $prop1 from both objects
// echo $obj1->getProperty();
// echo $obj2->getProperty();

// // get the new values for both objects
// $obj1->setProperty("I'm a new property value!");
// $obj2->setProperty("I belong to the second instance!");


// // display both objects $prop1 value
// echo $obj1->getProperty();
// echo $obj2->getProperty();

// LVEL 3
// Create a new object
// $obj = new MyClass;

// Get the value of $prop1
// echo $obj->getProperty();

// Destroy the object
// unset($obj);
// Output a message at the end of the file
// echo "End of file.<br />";
?>