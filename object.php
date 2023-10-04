<?php
class Car {
  public $color;
  public $model;
  
  public function __construct($co, $mo) {
    $this->color = $co;
    $this->model = $mo;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "\n";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>