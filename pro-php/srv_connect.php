<?php

$serverName = 'DESKTOP-6HKMAB1';
$connectionInfo = array('Database' => 'schoolmanagementdb');
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn) {
    echo 'Connection established<br>';
} else {
    echo 'Connection failure!';
    die(print_r(sqlsrv_errors(), true));
}