<?php

declare(strict_types=1);

function changeJob(array $person, string $newJobs) : array {
    $person['job'] = $newJobs; // change the person jobs
    return $person;
}

function happyBirthday(array $person) : array {
    ++$person['age'];
    return $person;
}

$person1 = array(
    'name' => 'Tom',
    'job' => 'Button-Pusher',
    'age' => 34
);

$person2 = array(
    'name' => 'John',
    'job' => 'Lever-Puller',
    'age' => 41
);

// Output the starting values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

// Tom got a promotion and had a birthday
$person1 = changeJob($person1, 'Box-Mover');
$person1 = happyBirthday($person1);

// John just had a birthday
$person2 = happyBirthday($person2);

// Output the new values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";