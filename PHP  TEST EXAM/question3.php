<?php

// QUESTION 3
// consider the following array
$person_array = array('Leanna', 'derek', 'Lisa', 'John', 'lancelot', 'Michael', 'norman', 'Lawrence of Arabia');

/**
  write a loop that will print out (on a new line) all names that
  begin with L or l (both uppercase and lowercase) that are longer than 5 characters
 */

//SUPPLY YOUR ANSWER BELOW THIS COMMENT
for ($i = 0; $i < count($person_array); $i++){
    if(substr($person_array[$i],0,1) == 'L' || substr($person_array[$i],0,1) == 'l') {
        if(strlen($person_array[$i]) >= 5){
            echo $person_array[$i].'<br>';
        }
    }
}