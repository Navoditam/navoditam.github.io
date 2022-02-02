<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'shikshadb';

$connection = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if($connection == false){
  die('Error: Could not connect. error details:'. mysqli_connect_error());
}



$sql = "SELECT * FROM `pincodeharyana` WHERE `district` = ?";


$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($sr, $circle, $na, $division, $station, $pincode, $office, $status, $district, $state);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $sr . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $circle . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $na . "</td>";
echo "<th>Address</th>";
echo "<td>" . $division . "</td>";
echo "<th>City</th>";
echo "<td>" . $station . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . $office . "</td>";
echo "<th>Country</th>";
echo "<td>" . $status . "</td>";
echo "</tr>";
echo "</table>";
?>