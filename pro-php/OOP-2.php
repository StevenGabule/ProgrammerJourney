<?php 

declare(strict_types=1);

class Person {
	private $_name;
	private $_job;
	private $_age;
	
	public function __construct(string $name, string $job, int $age) {
		$this->_name = $name;
		$this->_job= $job;
		$this->_age= $age;
	}
	
	public function changeJob(string $newJob) {
		$this->_job = $newJob;
	}
	
	public function happyBirthday() {
		++$this->_age;
	}	
}

// create two new people
$person1 = new Person("Tom", "WordPress Developer", 32);
$person2 = new Person("John", "Laravel Developer", 33);

// output their starting point
echo "<pre>Person 1: ", print_r($person1, true) ,"</pre>";
echo "<pre>Person 2: ", print_r($person2, true) ,"</pre>";

// give tom a promotion and a birthday
$person1->changeJob("Senior Laravel Developer");
$person1->happyBirthday();

$person2->happyBirthday();

// output the ending values
echo "<pre>Person 1: ", print_r($person1, true) ,"</pre>";
echo "<pre>Person 2: ", print_r($person2, true) ,"</pre>";

