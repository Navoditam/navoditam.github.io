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
$s=$s.$q.$s;

$con = mysqli_connect('localhost','root','','shikshadb');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM villageharyana WHERE VillName LIKE '".$s."'";
$result = mysqli_query($con,$sql);


$x=1;

$z = mysqli_num_rows($result);
echo "Total Result found : $z";

echo "<table>
<tr>
<th>Sr No.</th>
<th>DistCode</th>
<th>DistName</th>
<th>TehCode</th>
<th>TehName</th>
<th>VillCode</th>
<th>VillName</th>
</tr>";


while($row = mysqli_fetch_array($result)) {
  
  echo "<tr>";
  echo "<td>" . $x . "</td>";
  echo "<td>" . $row['DistCode'] . "</td>";
  echo "<td>" . $row['DistName'] . "</td>";
  echo "<td>" . $row['TehCode'] . "</td>";
  echo "<td>" . $row['TehName'] . "</td>";
  echo "<td>" . $row['VillCode'] . "</td>";
  echo "<td>" . $row['VillName'] . "</td>";
  echo "</tr>";
  $x++;
}
echo "</table>";



mysqli_close($con);
?>
</body>

</html>