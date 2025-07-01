<?php

class Bicycle {

    var $brand;
    var $model;
    var $year;
    var $description = 'Used bicycle';
    var $weight_kg = 0.0;

    function name() {
        return "{$this->brand}, {$this->model}, {$this->year}";
    }

    // Overriding string representation
    // function __tostring() {
    //     return "{$this->brand}, {$this->model}, {$this->year}";
    // }

    function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($weight_lbs) {
        $lbs = floatval($weight_lbs) / 2.2046226218;
        $this->weight_kg = round($lbs, 2);
    }

}

$bike = new Bicycle;
$bike->brand = "Supercycle Reaction";
$bike->model = "Sunrun Derailleur";
$bike->year = "2025";
$bike->description = "Versatile and well-equipped hardtail mountain bike.";
$bike->set_weight_lbs(36.51);

echo $bike->brand . "<br>";
echo $bike->model . "<br>";
echo $bike->year . "<br>";
echo $bike->description . "<br>";
echo $bike->weight_kg . "<br>";

?>