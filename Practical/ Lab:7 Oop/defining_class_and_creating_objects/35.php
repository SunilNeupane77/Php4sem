// Instantiate two Car objects with different values and display their details.
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

  public function getMake() {
    return $this->make;
  }

  public function getModel() {
    return $this->model;
  }

  public function getYear() {
    return $this->year;
  }

  public function displayDetails() {
    echo "Make: " . $this->make . "<br>";
    echo "Model: " . $this->model . "<br>";
    echo "Year: " . $this->year . "<br><br>";
  }
}

// Create two Car objects with different values
$car1 = new Car("Toyota", "Camry", 2023);
$car2 = new Car("Ford", "Mustang", 2022);

// Display the details of each car
echo "Car 1 Details:<br>";
$car1->displayDetails();

echo "Car 2 Details:<br>";
$car2->displayDetails();

?>