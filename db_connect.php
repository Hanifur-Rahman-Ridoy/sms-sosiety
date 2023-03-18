<?php

$host_name = 'localhost';
$user_name = 'u358189546_smssosiety';
$password = 'Sms#101010';
$db_name = 'u358189546_db_smssosiety';

$con = mysqli_connect($host_name, $user_name, $password);

if ($con) {
    $db_select = mysqli_select_db($con, $db_name);
    if ($db_select) {
    } else {
        die('Database Selection Failed' . mysqli_error($con));
    }
} else {

    die('Database Connection Failed' . mysqli_error($con));
}
