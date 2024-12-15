// 38. Create a Person class with properties name and age. Define a method displayInfo() that
prints these details. Also, create a subclass Employee that extends Person and adds a new
property position. Override the displayInfo() method to include the position information.
<?php

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

class Employee extends Person {
    private $position;

    public function __construct($name, $age, $position) {
        parent::__construct($name, $age);
        $this->position = $position;
    }

    public function displayInfo() {
        parent::displayInfo(); 
        echo "Position: " . $this->position . "<br>";
    }
}

// Create objects
$person1 = new Person("John Doe", 30);
$employee1 = new Employee("Jane Smith", 25, "Software Engineer");

// Display information
echo "Person 1:<br>";
$person1->displayInfo();

echo "<br>Employee 1:<br>";
$employee1->displayInfo();

?>