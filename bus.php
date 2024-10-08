<?php
// Include the vehicle class file
include 'vehicle.php';

class Bus extends Vehicle {
    // No additional properties or methods yet
}

// Example usage
$bus = new Bus("Bus", 100, 15);
echo $bus->displayDetails();
?>