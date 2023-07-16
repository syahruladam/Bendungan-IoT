<?php

$dbHost ="localhost";
$dbUser ="root";
$dbPass ="";
$dbName ="db_sensor";

$dbConnect = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($dbConnect->connect_error) {
    die("Connection failed : ");
}


?>