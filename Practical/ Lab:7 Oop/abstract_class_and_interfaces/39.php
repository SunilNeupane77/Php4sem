// 39. Create an abstract class Shape with an abstract method calculateArea(). Define two
subclasses Circle and Rectangle that implement the calculateArea() method. Instantiate
the Circle and Rectangle classes, calculate their areas, and display the results.
<?php

abstract class Shape {
    abstract public function calculateArea(); 
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2); 
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Create objects
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Calculate and display areas
echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";

?>