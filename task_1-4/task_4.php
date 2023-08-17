<?php
// Define the Animal class (superclass)
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Some generic animal sound";
    }
}

// Implement subclasses for specific animals
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Elephant extends Animal {
    public function makeSound() {
        return "Trumpet!";
    }
}

// Usage
$animals = [
    new Dog("Buddy"),
    new Cat("Whiskers"),
    new Elephant("Dumbo")
];

foreach ($animals as $animal) {
    echo $animal->name . " says: " . $animal->makeSound() . PHP_EOL;
}
