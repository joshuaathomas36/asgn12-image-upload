<?php

$sname = 'localhost';
$uname = 'asng12_images';
$password = '1234';
$db_name = 'asng12_images';

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if(!$conn) {
    echo "Connection failed.";
} 

