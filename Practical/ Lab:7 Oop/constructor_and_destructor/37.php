// Add a destructor method to the Car class that displays a message when the object is
destroyed.
<?php

class Car {
  private $make;
  private $model;
  private $year;

  public function __construct($make, $model, $year) {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
  }

  public function __destruct() {
    echo "Car object destroyed.<br>";
  }

  public function getMake() {
    return $this->make;
  }

  public function getModel() {
    return $this->model;
  }

  public function getYear() {
    return $this->year;
  }
}

$myCar = new Car("Toyota", "Camry", 2023);
echo "Car details:<br>";
echo "Make: " . $myCar->getMake() . "<br>";
echo "Model: " . $myCar->getModel() . "<br>";
echo "Year: " . $myCar->getYear() . "<br>";

// The car object will be destroyed here when it goes out of scope
?>