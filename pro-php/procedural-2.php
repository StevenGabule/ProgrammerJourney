<?php 

declare(strict_types=1);

function changeJob(array $person, string $newJobs) : array {
	$person['job'] = $newJobs; 
	return $person;
}

function happyBirthday(array $person) : array {
	++$person['age'];
	return $person;
}

$person1 = array(
	'name' => 'Tom',
	'job' => 'Web Developer',
	'age' => 32,
);

$person2 = array(
	'name' => 'John',
	'job' => 'Web Designer',
	'age' => 23,
);

echo "<pre>Person 1: ", print_r($person1, true) , " </pre>";
echo "<pre>Person 2: ", print_r($person2, true) , " </pre>";

$person1 = changeJob($person1, "SEO Developer");
$person1 = happyBirthday($person1);

$person2 = happyBirthday($person2);

echo "<pre>Person 1: ", print_r($person1, true) , " </pre>";
echo "<pre>Person 2: ", print_r($person2, true) , " </pre>";



