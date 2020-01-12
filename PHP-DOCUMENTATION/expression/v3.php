<?php
function double($x) {
    return  2 * $x;
}

$triple = function($x) {
    return 3 * $x;
};

$my_numbers = array(call_user_func('double', 5), call_user_func($triple, 5));
$total = 0;

for ($i = 0; $i < count($my_numbers); $i++) {
     $total +=$my_numbers[$i];
}

echo number_format($total, 2);
echo "<br>";
$my_number = call_user_func(function($x) { return 4 * $x; }, 5);
echo $my_number;

/*  ================================================================================
    Passing functions around as expressions like this is very useful whenever we
    need to use a 'callback'. Great examples of this are array_map and array_reduce.
*  ================================================================================ */

