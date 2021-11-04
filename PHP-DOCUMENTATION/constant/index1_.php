<?php
/* CONSTANTS and PHP Class Definitions
 Using "define('MY_VAR', 'default value')" INSIDE a class definition does not work as expected.
 You have to use the PHP keyword 'const' and initialize it with a scalar value
 -- boolean, int, float, string (or array in PHP 5.6+) -- right away.
*/

const MIN_VALUE = 0.0;   // RIGHT - Works OUTSIDE of a class definition.
const MAX_VALUE = 1.0;   // RIGHT - Works OUTSIDE of a class definition.

// const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
// const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.
  public const MIN_VALUE = 10.0;      // RIGHT - Works INSIDE of a class definition.
  public const MAX_VALUE = 11.0;      // RIGHT - Works INSIDE of a class definition.
  public const AVER_VALUE = 10;
  public string $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public static function getMinValue(): float
  {
    return self::MIN_VALUE;
  }

  public static function getMaxValue(): float
  {

    return self::MAX_VALUE;
  }
}

/*
# Example 1:
  You can access these constants DIRECTLY like so:
  type the class name exactly.
  type two (2) colons.
  type the const name exactly.

# Example 2:
  Because our class definition provides two (2) static functions, you can also access them like so:
  type the class name exactly.
  type two (2) colons.
  type the function name exactly (with the parentheses).
* */

echo Constants::getMinValue();
echo Constants::getMaxValue();
echo Constants::MIN_VALUE;
echo Constants::MAX_VALUE;
echo Constants::AVER_VALUE;


