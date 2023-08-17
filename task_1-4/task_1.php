<?php
// Define the Shape interface
interface Shape {
    public function calculateArea();
}

// Implement the Circle class
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Implement the Rectangle class
class Rectangle implements Shape {
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

// Usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->calculateArea() . PHP_EOL;
echo "Rectangle Area: " . $rectangle->calculateArea() . PHP_EOL;

?>