<?php
header("Content-Type: text/plain");
//echo (1 <= 1 == 1) ? 'true' : 'false';
/*$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo $a . "<br>";

$a = false ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo $a;

$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5*/

// Example #2 Undefined order of evaluation
/*$a = 1;
echo $a + $a++; // may print either 2 or 3
echo "<br>";
$i = 1;
$array[$i] = $i++; // may set either index 1 or 2
echo $array[$i];*/

// Example #3 +, - and . have the same precedence
/*$x = 4;
// this line might result in unexpected output:
echo "x minus one equals " . ($x-1) . ", or so I hope\n";
// because it is evaluated like this line:
//echo (("x minus one equals " . $x) - 1) . ", or so I hope\n";
// the desired precedence can be enforced by using parentheses:
echo "x minus one equals " . ($x-1) . ", or so I hope\n";*/

// 5
$bool = true && false;
echo ($bool); // false, that's expected

$bool = true and false;
echo ($bool); // true, ouch!

