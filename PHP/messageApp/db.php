<?php

$connection = mysqli_connect('localhost', 'root', '', 'messageapp');

if(mysqli_connect_errno($connection)) {
	echo 'error to connect to database' . mysqli_connect_error();
}

?>