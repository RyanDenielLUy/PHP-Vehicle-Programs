<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    // Constructor to initialize attributes
    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    // Method to display vehicle details
    public function displayDetails() {
        return "Vehicle Name: $this->name, Speed: $this->speed, Mileage: $this->mileage";
    }
}

// Example usage
$car = new Vehicle("Car", 150, 18);
echo $car->displayDetails();
?>