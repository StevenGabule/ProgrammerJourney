<?php
/*$farm = new StdClass;
$farm->emu = array('name' => 'Henry', 'age' => 9);
$farm->rabbit = array('name' => 'George', 'age' => 4);

$animal = 'rabbit';
print_r($farm->$animal); // ok
// print( $farm->$animal[ 'name' ] );  // wrong, [ has precedence.
print($farm->{$animal}['name']); // correct, prints George.

$farm->wash = 'Suds';
$jobs = array('morning' => 'feed', 'evening' => 'wash');
print($farm->$jobs['evening']); // correct, prints Suds.
print($farm->{$jobs['evening']}); // correct, prints Suds.*/

function F($v) {
    echo $v . " ";
    return false;
}

function T($v) {
    echo $v . " ";
    return true;
}

IF (F(0) || T(1) && F(2) || F(3) && !F(4)) {
    echo "true";
} else echo " false";