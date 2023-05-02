<?php

$dbhost='localhost';
$dbuser ='root';
$dbpassword ='root';
$dbdatabase= 'testdatabase';

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Print host information
//echo "Connect Successfully. Host info: " . $mysqli->host_info;
