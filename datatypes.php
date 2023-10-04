 <!--
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
 -->

 <?php
    $a = "string ";
    $i = 10;
    echo  $a . "\n";
    echo  $i . "\n";
    $x = 5985;
    var_dump($x); //return datatype and value 
    $f = 10.45;
    echo $f . "\n";
    echo var_dump($f);
    $b = false;
    $b = true;
    echo $b. "\n";

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    ?>


<!-- When the individual objects are created, they inherit all the properties and behaviors from the class, 
but each object will have different values for the properties. -->

<?php 
$x = "\n Hello world!";
$x = null;
var_dump($x);

$y ;
var_dump($y);

?>