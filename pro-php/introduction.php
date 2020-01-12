<?php
/*
print <<<END
<pre>
It's funny when signs say things like:
 Original "Root" Beer
 "Free" Gift
 Shoes cleaned while "you" wait
or have other misquoted words.

</pre>
END;
*/

// Finding a substring with strpos( )
//if(strpos($_POST['email'], '@') === false) {
//	print 'There are no @ in the email address';
//}

// Extracting a substring with substr( )
// $subString = substr($string, $start, $length);
// $username = substr($_GET['username'], 0, 8);
// print substr('watch out for that tree',15,-2) . "<br>";
// print substr('watch out for that tree',-4,-1);


// Replacing a substring with substr_replace( )
// print substr_replace('My Pet is a blue dog.', 'fish', 12) . "<br>";
// print substr_replace('My Pet is a blue dog.', 'green', 12,4) . "<br>";
// $credit_card = '4111 1111 1111 1111';
// echo strlen($credit_card) . "<br>";
// print substr_replace($credit_card,'xxxx', 0, strlen($credit_card)-4) . "<br>";

// If $start is negative, the new substring is placed by counting $start characters 
// from the end of $old_string, not from the beginning:
// print substr_replace('My pet is a blue dog.','fish.',-9);
// print substr_replace('My pet is a blue dog.','green',-9,4);


// Displaying long text with an ellipsis


/*$string = "This weekend, I'm going shopping for a pet chicken.";
$vowels = 0;

for ($i = 0, $j = strlen($string); $i < $j; $i++) {
	if (strstr('aeiouAEIOU', $string[$i])) {
		$vowels++;
	} else {
		echo $string[$i];
	}
}*/


// Example 1-17. The Look and Say sequence
/*function lookAndSay($s) {
    // initialize the return value to the empty string
    $r = '';
    // $m holds the character we're counting, initialize to the first
    // character in the string
    $m = $s[0];
    // $n is the number of $m's we've seen, initialize to 1
    $n = 1;
    for ($i = 1, $j = strlen($s); $i < $j; $i++) {
        // if this character is the same as the last one
        if ($s[$i] == $m) {
            $n++;   // increment the count of this character
        } else {
            // otherwise, add the count and character to the return value
            $r .= $n.$m;
            // set the character we're looking for to the current one
            $m = $s[$i];
            // and reset the count to 1
            $n = 1;
        }
    }
    // return the built up string as well as the last count and character
    return $r.$n.$m;
}

for ($i = 0, $s = 1; $i < 10; $i++) {
    $s = lookAndSay($s);
    print "$s<br>";
}*/

// Example 1-19. Reversing a string by word
/*$s = "Once upon a time there was a turtle.";
// break the string up into words
$words = explode(' ',$s);
// reverse the array of words
$words = array_reverse($words);
// rebuild the string
$ss = implode(' ',$words);
$reverse_s = implode(' ', array_reverse(explode(' ',$s)));
print $reverse_s;*/

// 1.6 Generating a Random String
/*function str_rand($length = 32, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if (!is_int($length) || $length < 0) {
        return false;
    }
    $characters_length = strlen($characters) - 1;
    $string = '';
    for ($i = $length; $i > 0; $i--) {
        $string .= $characters[mt_rand(0, $characters_length)];
    }
    return $string;
}
print str_rand(16, '.-');*/
/*print <<< END
Right now, the time is 
END
    . strftime('%c') . <<< END
 but tomorrow it will be 
END
   . strftime('%c',time() + 86400);*/

// Example 1-27. Generating comma-separated data
//$sales = array(array('Northeast', '2005-01-01', '2005-02-01', 12.54),
//                array('Northwest', '2005-01-01', '2005-02-01', 546.33),
//                array('Southeast', '2005-01-01', '2005-02-01', 93.26),
//                array('Southwest', '2005-01-01', '2005-02-01', 945.21),
//                array('All Regions', '--', '--', 1597.34));
//ob_start();
//$filename = './sales.csv';
//$fh = fopen($filename, 'w') or die("Can't open $filename");
//$fh = fopen('./sales.csv', 'w') or die("Can't open ./sales.csv");
/*foreach ($sales as $sales_line) {
    if (fputcsv($fh, $sales_line) === false) {
        die("Can't write CSV line");
    }
    echo "<br>";
}
fclose($fh) or die("Can't close ./sales.csv");
$output = ob_get_contents();
ob_end_clean();*/

// Example 1-30. Reading CSV data from a file
/*$filename = './sales.csv';
$fp = fopen($filename,'r') or die("can't open file");
print "<table>\n";
while($csv_line = fgetcsv($fp)) {
    print '<tr>';
    for ($i = 0, $j = count($csv_line); $i < $j; $i++) {
        print '<td>'.htmlentities($csv_line[$i]).'</td>';
    }
    print "</tr>\n";
}
print "</table>\n";
fclose($fp) or die("can't close file");*/
// Example 1-31. Generating fixed-width field data records
/*$books = array(array('Elmer Gantry', 'Sinclair Lewis', 1927),
               array('The Scarlatti Inheritance','Robert Ludlum', 1971),
               array('The Parsifal Mosaic','William Styron', 1979) );
foreach ($books as $book) {
    $title = str_pad(substr($book[0], 0, 25), 25, '.');
    $author = str_pad(substr($book[1], 0, 15), 15, '.');
    $year = str_pad(substr($book[2], 0, 4), 4, '.');
    print "$title$author$year<br>";
}*/

$a = array(1,2,3);
$b = array(2,3,4);
echo $a + $b;