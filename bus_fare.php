<?php
// Include the vehicle class file
include 'vehicle.php';

class Bus extends Vehicle {
    public $capacity;

    public function __construct($name, $speed, $mileage, $capacity = 50) {
        parent::__construct($name, $speed, $mileage);
        $this->capacity = $capacity;
    }

    // Override fare method
    public function fare() {
        $basicFare = $this->capacity * 100;
        $maintenanceCharge = $basicFare * 0.10;
        return $basicFare + $maintenanceCharge;
    }
}

// Example usage
$bus = new Bus("Bus", 100, 15);
echo "Total Bus Fare: " . $bus->fare();
?>