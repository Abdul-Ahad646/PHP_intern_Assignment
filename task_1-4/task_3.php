<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary); // Use setter for encapsulation
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary cannot be negative.");
        }
    }
}

// Usage
try {
    $employee = new Employee("John Doe", 50000);
    echo "Employee: " . $employee->getName() . PHP_EOL;
    echo "Salary: $" . $employee->getSalary() . PHP_EOL;

    $employee->setSalary(60000);
    echo "Updated salary: $" . $employee->getSalary() . PHP_EOL;

    // This will throw an exception
    // $employee->setSalary(-1000);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
