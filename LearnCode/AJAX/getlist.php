<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$s="%";
$r=$q.$s;

$con = mysqli_connect('localhost','root','','shikshadb');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT VillName, TehName, DistName FROM villageharyana WHERE VillName LIKE '".$r."'";
$result = mysqli_query($con,$sql);


$x=1;


while($row = mysqli_fetch_array($result)) {
  
  echo "<option value='";
  echo $row['VillName'];
  echo "'>Tehsil - " . $row['TehName'];
  echo ", District - " . $row['DistName'];
  echo "</option>";
  $x++;
}



mysqli_close($con);
?>
</body>

</html>