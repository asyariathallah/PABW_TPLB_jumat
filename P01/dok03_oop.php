<?php
class Car {
  public $color;
  public $model;
  private $year = 2023;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCarA = new Car("black", "Volvo");
echo $myCarA -> message();
echo "<br>";
$myCarB = new Car("red", "Toyota");
echo $myCarB -> message();
echo"<hr>";
var_dump($myCarA);
echo "<p>";
var_dump($myCarB);
echo"<hr>";

?>