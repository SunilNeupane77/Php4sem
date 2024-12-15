// 36. Modify the Car class to include a constructor that initializes the make, model, and year
properties when the object is created.
<?php

class Car {
  private $make;
  private $model;
  private $year;

  // Constructor to initialize properties
  public function __construct($make, $model, $year) {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
  }

  // Getter for make
  public function getMake() {
    return $this->make;
  }

  // Getter for model
  public function getModel() {
    return $this->model;
  }

  // Getter for year
  public function getYear() {
    return $this->year;
  }
}

?>