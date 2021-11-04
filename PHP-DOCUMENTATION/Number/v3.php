<?php

/*$log = log(10); // $log is about 2.30258
print $log . "\n"; // 2.302585092994
// $log10 == 1
$log10 = log10(10);
print $log10 . "\n"; // 1

// log base 2 of 10 is about 3.32
$log2 = log(10, 2);
print $log2 . "\n"; // 3.3219280948874*/


/*$exp = exp(2); // $exp (e squared) is about 7.389
$exp = pow(2, M_E); // $exp (2^e) is about 6.58
$pow1 = pow(2, 10); // $pow1 (2^10) is 1024
$pow2 = pow(2, -2); // $pow2 (2^-2) is 0.25
$pow3 = pow(2, 2.5); // $pow3 (2^2.5) is about 5.656
$pow4 = pow(-2, 10); // $pow4 ( (-2)^10 ) is 1024
$pow5 = pow(-2, -2.5); // is_nan($pow5) returns true, because fractional exponent of negative 2 is not a real number.

$number = 1234.562323;

// $formatted1 is "1,235" - 1234.56 gets rounded up and , is
// the thousands separator");
$formatted1 = number_format($number);

// Second argument specifies number of decimal places to use.
// $formatted2 is 1,234.56
$formatted2 = number_format($number, 2);

// Third argument specifies decimal point character
// Fourth argument specifies thousands separator
// $formatted3 is 1.234,56
$formatted3 = number_format($number, 2, ",", ".");
print $formatted1 . "\n";
print $formatted2 . "\n";
print $formatted3 . "\n";*/

$number = '1234.56';
// $formatted1 is 1,234.56
$usa = new NumberFormatter("en-US", NumberFormatter::DEFAULT_STYLE);
$formatted1 = $usa->format($number);

// $formatted2 is 1 234,56
// Note that it's a "non breaking space (\u00A0) between the 1 and the 2
$france = new NumberFormatter("fr-FR", NumberFormatter::DEFAULT_STYLE);
$formatted2 = $france->format($number);
print $formatted1 . "\n";
print $formatted2 . "\n";

$number = 31415.92653; // your number
echo number_format($number, 2) . "\n";
list($int, $dec) = explode('.', $number);

// $formatted is 31,415.92653
$formatted = number_format($number, strlen($dec));
echo $formatted;

