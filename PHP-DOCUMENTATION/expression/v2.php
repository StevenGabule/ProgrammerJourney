<?php
/*Note that even though PHP borrows large portions of its syntax from C, the ','
is treated quite differently. It's not possible to create combined expressions
in PHP using the comma-operator that C has, except in for() loops.
Example (parse error):*/

$a = 2;
$b = 4;

echo $a . "<br>";
echo $b . "<br>";

# Example (works):
for ($a = 2, $b = 4; $a < 5; $a++) {
    echo $a . "<br>";
    echo $b++ . "<br>";
}
