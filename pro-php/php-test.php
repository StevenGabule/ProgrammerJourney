<?php

function calc($i) {
    if($i > 0) {
        echo $i + 1;
    } else {
        throw new Exception("value must be an integer");
    }
}

try {
    calc('nine');
    echo " and counting";
} catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}