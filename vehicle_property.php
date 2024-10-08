<?php
class Vehicle {
    public static $wheels = 4; // Static property to be shared among all instances

    public function displayWheels() {
        return "All vehicles have " . self::$wheels . " wheels.";
    }
}

class Bus extends Vehicle {}

class Car extends Vehicle {}

// Example usage
$bus = new Bus();
$car = new Car();

echo $bus->displayWheels();
echo "<br>";
echo $car->displayWheels();
?>