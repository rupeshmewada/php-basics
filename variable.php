<?php
// $txt = "Hello world!";
// $x = 5;
// $y = 10.5;
// echo "value of is = $x , y= $y and $txt \n";
// echo "value of x is =" . $x  . " and y = " .$y . "\n"; 

// $x = 5;
// $y = 4;
// echo $x + $y;

?>


<!-- global variable  -->
<?php
// $a= 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   global $a;
//   echo "<p>Variable x inside function is: $a </p>\n";
// }
// myTest();

// echo "<p>Variable x outside function is: $a</p>";
?>


<!-- local variable  -->
<?php

// function myTest() {
//   $x = 5; // local scope
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";
?>

<!-- global variable  -->
<?php 
// $x = 5;
// $y = 10;

// function myTest() {
//   global $x, $y;
//   $y = $x + $y;
// }

// myTest();
// echo $y; // outputs 15
?>

<!-- static keyword  -->
<?php
function myTest() {
  static $x = 0;
  echo $x ."\n";
  $x++;
}

myTest();
myTest();
?>