<?php
/*
  the difference between
__FUNCTION__ and __METHOD__ as in PHP 5.0.4 is that
__FUNCTION__ returns only the name of the function
while as __METHOD__ returns the name of the class along with the name of the function
*/

class Trick
{
    function doit()
    {
        echo __FUNCTION__;
    }

    function doitAgain()
    {
        echo __METHOD__;
    }
}

$obj = new trick();
$obj->doit();
echo "<br>";
# output will be ----  doit
$obj->doitagain();