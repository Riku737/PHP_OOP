<?php

class Fun {
    public function __construct() {

    }

    public function __destruct() {

    }

    /**
     * The clone method!!
     * - Creates a brand new instance and set all the properties the same as the current object
     * - Called whenever we call clone
     * - Clone does not take in any arguments
     * - Literally takes existing instance and clone that
     * - Runs codes inside the method first
     * - Doesn't call constructor method, only calls clone method if it is defined
     * - Clone method allows you to customize the clonng process, but the constructor is never executed during cloning 
     */
    public function __clone() {

    }
}


class Beverage {
    public $name;

    function __construct() {
        echo "New beverage was constructed. <br>";
    }

    function __clone() {
        echo "Existing beverage was cloned. <br>";
    }
}

$a = new Beverage();
$a->name = "Tea <br>";
echo $a->name;

echo "<hr>";

$b = clone $a; // Calls only the call method in the instance (all instance variables are copied)
echo $a->name;
echo $b->name;

echo "<hr>";

$b->name = "Coffee";
echo $a->name;
echo $b->name;

?>