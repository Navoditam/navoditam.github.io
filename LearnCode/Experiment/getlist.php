<?php
$q = $_GET['q'];
$s="%";
$r=$q.$s;

$con = mysqli_connect('localhost','root','','shikshadb');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT VillCode, VillName, TehName, DistName FROM villageharyana WHERE VillName LIKE '".$r."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
  
  echo ($row['VillCode'].",".$row['VillName'].",".$row['TehName'].",".$row['DistName']."|");

}

mysqli_close($con);
?>
