<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'shikshadb';

$connection = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if($connection == false){
  die('Error: Could not connect. error details:'. mysqli_connect_error());
}

?>
