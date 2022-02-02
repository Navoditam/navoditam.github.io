<!DOCTYPE html>
<html>
  <head>

  <style>
    .blue{
      color:blue;
    }
    .red{
      color:red;
    }
  </style>
  </head>
<body>

<h1>My first PHP page</h1>

$var="PHP";

<?php
$var="PHP";
$num = 2.5;
echo "<br>Hello World of $var!";
echo "<br>"."hello world of " . $var . "!";
echo "<br>". $num + $num . "<br>";
echo var_dump($var);
echo var_dump($num);
?>
<br>
<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo $GLOBALS["x"];
    $y = 2.5;
    echo "<p>Variable x inside function is: $x</p>";
    echo "<p>Variable y inside function is: $y</p>";
      global $x;
    echo "<p>Variable x inside after global function is: $x</p>";
  
}

myTest();

echo "<p>Variable x outside function is: $x</p>";
echo "<p>Variable y outside function is: $y</p>";

?>

<?php
function myTest1() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest1();
myTest1();
myTest1();
?>

<?php
function myTest2() {
  $x = 0;
  echo $x;
  $x++;
}

myTest2();
myTest2();
myTest2();



$var1 = Print($var3);
echo var_dump($var1);

$arr = array("abc", "bcd", "cde","def");
echo var_dump($arr);
echo $arr[0];
echo $arr[3];

?> 
<h1>Class and Object</h1>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

echo var_dump($color);
echo var_dump($model);
echo var_dump($myCar);


?>  

<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>

<?php
echo "<p> Random Number <p>";
echo(rand(100000,999999 ));

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<?php
echo cars[0];
echo $int_cast;
?> 

<?php

$age=21;

if($age<20){
  $color="red";
} else
$color="blue";

echo "<h1 class=$color>Color of this heading is changed via php variable</h1>"


?>

<?php
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo $today . "<br>";
$today = date("m.d.y");                         // 03.10.01
echo $today . "<br>";
$today = date("j, n, Y");                       // 10, 3, 2001
echo $today . "<br>";
$today4 = date("Ymd");                           // 20010310
echo $today4 . "<br>";
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today . "<br>";
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today . "<br>";
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo $today . "<br>";
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo $today . "<br>";
$today = date("H:i:s");                         // 17:16:18
echo $today . "<br>";
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
echo var_dump($today4);
?> 

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>

<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>

<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>

<?php
function familyName($son, $father, $gfather) {
  echo "$son is son of $father and ";
  echo "$father is son of $gfather";

}

familyName("Jani", "Mani", "Dani");

?> 


<?php
function addNumbers5( $a, $b) {
  return $a + $b;
}
echo addNumbers5(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>

 <?php
function addNumbers3(int $a, int $b) {
  return $a + $b;
}
echo addNumbers3(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>

</body>
</html>