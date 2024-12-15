// 34. Create a Car class with properties for make, model, and year. Define methods to set and
get these properties.
<?php

class Car {
  private $make;
  private $model;
  private $year;

  // Setter for make
  public function setMake($make) {
    $this->make = $make;
  }

  // Getter for make
  public function getMake() {
    return $this->make;
  }

  // Setter for model
  public function setModel($model) {
    $this->model = $model;
  }

  // Getter for model
  public function getModel() {
    return $this->model;
  }

  // Setter for year
  public function setYear($year) {
    $this->year = $year;
  }

  // Getter for year
  public function getYear() {
    return $this->year;
  }
}

$myCar = new Car();
$myCar->setMake("Toyota");
$myCar->setModel("Camry");
$myCar->setYear(2023);

echo "Make: " . $myCar->getMake() . "<br>";
echo "Model: " . $myCar->getModel() . "<br>";
echo "Year: " . $myCar->getYear() . "<br>";

?>