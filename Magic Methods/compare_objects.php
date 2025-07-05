<?php

/**
 * Comparison operator: ==
 * - Returns true if they both have matching properties
 * Identity operator (stricter): ===
 * - Returns true if they both refer to the exact same object (both point to same piece of memory in PHP)
 * - Not only do they appear the same, but they are actually the same 
 */

class Car {
    public $name="car";
}

$car = new Car;

$car_reference = $car;

$car_clone = clone $car;

$car_modified = clone $car;
$car_modified->name = "changed car";

$another_car = new Car;

$car == $car_reference; // true (same properties)
$car == $car_clone; // true (same properties)
$car == $car_modified; // false (different properties)
$car == $another_car; // true (same properties)

$car === $car_reference; // true (pointing to same place in memory)
$car === $car_clone; // false (new object created with same properties)
$car === $car_modified; // false (new object created with same properties)
$car === $another_car; // false (new object created with same properties)

?>