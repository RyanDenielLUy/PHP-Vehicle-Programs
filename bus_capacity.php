<?php
// Include the vehicle class file
include 'vehicle.php';

class Bus extends Vehicle {
    public $capacity;

    // Constructor to inherit parent attributes and set default capacity
    public function __construct($name, $speed, $mileage, $capacity = 50) {
        parent::__construct($name, $speed, $mileage);
        $this->capacity = $capacity;
    }

    public function seating_capacity() {
        return $this->capacity;
    }
}

// Example usage
$bus = new Bus("Bus", 100, 15);
echo "Bus Capacity: " . $bus->seating_capacity();
?>