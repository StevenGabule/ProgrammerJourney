<?php
//  2.5 Generating Random Numbers Within a Range
/*$lower = 65; $upper = 97;
// random number between $upper and $lower, inclusive
$random_number = mt_rand($lower, $upper);
print $random_number;*/

// Seed the random number generator with a known value using mt_srand() (or srand()):
/*function pick_color() {
    $colors = array('red', 'orange', 'yellow', 'blue', 'green', 'indigo', 'violet');
    $i = mt_rand(0, count($colors) - 1);
    return $colors[$i];
}
mt_srand(34534);
$first = pick_color();
$second = pick_color();
// Because a specific value was passed to mt_srand(), we can be
// sure the same colors will get picked each time: red and yellow
print "$first is red and $second is yellow.";*/


//  2.7 Generating Biased Random Numbers
// returns the weighted randomly selected key
/*function rand_weighted($numbers) {
    $total = 0;
    foreach ($numbers as $number => $weight) {
        $total += $weight;
        $distribution[$number] = $total;
    }
    $rand = mt_rand(0, $total - 1);
    foreach ($distribution as $number => $weights) {
        if ($rand < $weights) {
            return $number;
        }
    }
}

// advertiser, remaining impressions
$ads = array('ford' => 12234, 'att' => 33424, 'ibm' => 16823);
$ad = rand_weighted($ads);
print_r($ad);*/

// With a generator in PHP 5.5, you could select the weighted random number without having
// to build the distribution array first:
function incremental_total($numbers) {
    $total = 0;
    foreach ($numbers as $number => $weight) {
        $total += $weight;
        yield $number => $total;
    }
}

// returns the weighted randomly selected key
function rand_weighted_generator($numbers) {
    $total = array_sum($numbers);
    $rand = mt_rand(0, $total - 1);
    foreach (incremental_total($numbers) as $number => $weight) {
        if ($rand < $weight) {
            return $number;
        }
    }
}

$ads = array('ford' => 12234, 'att' => 33424, 'ibm' => 16823);
$ad = rand_weighted_generator($ads);
print_r($ad);















