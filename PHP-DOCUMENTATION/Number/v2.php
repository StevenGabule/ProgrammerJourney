<?php
//  2.5 Generating Random Numbers Within a Range
/*$lower = 65;
$upper = 97;
// random number between $upper and $lower, inclusive
$random_number = mt_rand($lower, $upper);
printf($random_number);*/

// Seed the random number generator with a known value using mt_srand() (or srand()):
/*function pick_color(): string
{
  $colors = ['red', 'orange', 'yellow', 'blue', 'green', 'indigo', 'violet'];
  $countColors = count($colors) - 1;
  $i = mt_rand(0, $countColors);
  return $colors[$i];
}

mt_srand(34534);
$first = pick_color();
$second = pick_color();
// Because a specific value was passed to mt_srand(), we can be
// sure the same colors will get picked each time: red and yellow
printf("$first is red and $second is yellow.");*/

//  2.7 Generating Biased Random Numbers
// returns the weighted randomly selected key
/*function rand_weighted($adds): string
{
  $total = 0;
  $distribution = [];
  foreach ($adds as $name => $weight) {
    $total += $weight;
    $distribution[$name] = $total;
  }

  $rand = mt_rand(0, $total - 1);
  foreach ($distribution as $name => $weights) {
    if ($rand < $weights) {
      return $name;
    }
  }
  return 0;
}
$ads = array('ford' => 12234, 'att' => 33424, 'ibm' => 16823);
$ad = rand_weighted($ads);
print_r($ad);*/


// With a generator in PHP 5.5, you could select the weighted random number without having
// to build the distribution array first:
function incrementTotal($numbers): Generator
{
  $total = 0;
  foreach ($numbers as $number => $weight) {
    $total += $weight;
    yield $number => $total;
  }
}

// returns the weighted randomly selected key
function randWeightGenerator(Array $numbers): string
{
  $total = array_sum($numbers);
  $rand = mt_rand(0, $total - 1);
  foreach (incrementTotal($numbers) as $number => $weight) {
    if ($rand < $weight) {
      return $number;
    }
  }
  return "";
}

$ads = array('ford' => 12234, 'att' => 33424, 'ibm' => 16823);
$ad = randWeightGenerator($ads);
print_r($ad);















