<?php
/*
The __CLASS__ magic constant nicely complements the get_class() function.
Sometimes you need to know both:
- name of the inherited class
- name of the class actually executed
Here's an example that shows the possible solution
*/

class Base_class
{
  function say_a()
  {
    echo "'a' - said the " . __CLASS__ . "<br>";
  }

  function say_b()
  {
    echo "'b' - said the " . get_class($this) . "<br>";
  }
}

class derived_class extends base_class
{
  function say_a()
  {
    parent::say_a();
    echo "'a' - said the " . __CLASS__ . "<br>";
  }

  function say_b()
  {
    parent::say_b();
    echo "'b' - said the " . get_class($this) . "<br>";
  }
}

$obj_b = new derived_class();
$obj_b->say_a();
$obj_b->say_b();
echo PHP_VERSION;


