<?php
/**
 * Created by PhpStorm.
 * User: John paul
 * Date: 4/30/2019
 * Time: 11:28 AM
 */

// 2.1 Checking Whether a Variable Contains a Valid Number
/*foreach ([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'] as $maybeNumber) {
    $isItNumeric = is_numeric($maybeNumber);
    $actualType = gettype($maybeNumber);
    print "Is the $actualType $maybeNumber numeric? ";
    if (is_numeric($maybeNumber)) {
        print "yes";
    } else {
        print "no";
    }
    print "\n";
}*/

// To strip the thousands separators from your number before calling is_numeric(), use str_replace():
//$number = "5,100";
//$withCommas = is_numeric($number);  // This is_numeric() call returns false
//$withoutCommas = is_numeric(str_replace(',', '', $number)); // This is_numeric() call returns true


/*$delta = 0.00001;
$a = 1.00000001; $b = 1.00000000;
print abs($a - $b) . "\n";
if (abs($a - $b) < $delta) {   print '$a and $b are equal enough.'; }*/


/*$numbers = range(3, 7);
foreach ($numbers as $n) {
    printf("%d squared is %d\n", $n, $n * $n);
}

foreach ($numbers as $n) {
    printf("%d cubed is %d\n", $n, $n * $n * $n);
}*/
//print_r(range('a','z'));

function squares($start, $stop) {
    if ($start < $stop) {
        for ($i = $start; $i <= $stop; $i++) {
            yield $i => $i * $i;
        }
    } else {
        for ($i = $stop; $i >= $start; $i--) {
            yield $i => $i * $i;
        }
    }
}

foreach (squares(3, 15) as $n => $square) {
    printf("%d squared is %d\n", $n, $square);
}


