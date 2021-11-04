<?php
$packed = pack('S4', 1974, 106, 28225, 32725);
// extract binary data from a string:
//$nums = unpack('S4num', $packed);
$nums = unpack('S1a/S1b/S1c/S1d', $packed);
print_r($nums);

$s = 'platypusa';
$ascii = unpack('c*', $s);
print_r($ascii);




