<?php

// QUESTION 2
// consider the following array
 
$this_array = array(14,23,264,654,4,34,34);

// write code that will print out the sum of the values in the array
// NOTE: Please do not use the array_sum function
//SUPPLY YOUR ANSWER BELOW THIS COMMENT
$total = 0;
foreach ($this_array as $item) {
    $total += $item;
}
echo $total;