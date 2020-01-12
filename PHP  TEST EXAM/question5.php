<?php

// QUESTION 5
// consider the following array
$person_array = array('Leanna', 'derek', 'Lisa', 'John', 'Lancelot', 'Michael', 'Norman', 'Lawrence of Arabia');

// Create an output array that contains all distinct characters (Uppercase and Lowercase)
// from the strings contained within the array above. Use only the str_split function 
// and any of the Array functions to do so.

// The output should then look something like this: Leandrki ... etc

//SUPPLY YOUR ANSWER BELOW THIS COMMENT
$array_size = count($person_array);

for ($i = 0; $i < $array_size; $i++) {

    $letter_split = str_split($person_array[$i]);

    for ($j = 0; $j < count($letter_split); $j++) {

        $words = strlen($person_array[$j]);

        for ($x = 0; $x < $words ; $x++) {

           if (strstr($letter_split[$j], $words)) {

           }

        }

    }

}
