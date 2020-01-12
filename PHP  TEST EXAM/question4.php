<?php
/**
 * 
 * Take your ID and sort it into a string, ordered by biggest number to smallest. 
 * Example: 
 * 
 * $id = "8910295209871"
 * - your code goes here - 
 * - your code goes here - 
 * - your code goes here - 
 * - etc etc etc - 
 * echo $sortedid; // which outputs 9998875221100
 * 
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 * DO NOT USE THE sort FUNCTIONS FOUND HERE http://php.net/manual/en/array.sorting.php THAT WOULD BE TOO EASY. DO IT YOURSELF. 
 * IF YOU REALLY CAN'T DO IT WITHOUT USING THOSE FUNCTIONS, THEN SUBMIT HAVING USED ONE OF THOSE FUNCTIONS. IT'S BETTER THAN NOT SUBMITTING AT ALL. 
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 *
 * NB: Do NOT copy and paste a solution from the internet. We are aware of these solutions and you WILL be penalised if you just use them
 * To prove that you wrote this yourself, add comment explaining why you do what you do
 *
 */

$id = "8910295209871";
$sortedid = "";

// your code goes here
$arrayNumber = str_split($id); // convert the string to array
$array_size = count($arrayNumber); // count all the list in the array

// loop each array (outer lopp)
for ( $i = 0; $i < $array_size; $i++ )  {
    // algorithm for sorting array of numbers (inner loop)
    for ($j = 0; $j < $array_size; $j++ ) {
        // check if the current array number is greater than the inner loop current number
        if ($arrayNumber[$i] > $arrayNumber[$j]) {
            $temp = $arrayNumber[$i];               // swap the array of numbers in temp
            $arrayNumber[$i] = $arrayNumber[$j];    // then swap again the current value of j to i to make sure to trace
            $arrayNumber[$j] = $temp;               // then swap again for the temp to arrayNumber of j
        }
    }
}

for( $i = 0; $i < $array_size; $i++ ) {
   $sortedid .= $arrayNumber[$i];
}

echo $sortedid;

