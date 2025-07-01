<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected $weight_kg = 0.0;
    protected $wheels = 2;

    private function name() {
        return "{$this->brand}, {$this->model}, {$this->year}";
    }

    public function wheel_details() {
        $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
        return "It has " . $wheel_string . ".";
    }

    public function weight_lbs() {
        return floatval($this->weight_kg) * 2.2046226218 . " lbs";
    }

    public function set_weight_kg($value) {
        $this->weight_kg = floatval($value);
    }

    public function get_weight_kg($value) {
        return $this->weight_kg . " kg";
    }

    public function set_weight_lbs($weight_lbs) {
        $lbs = floatval($weight_lbs) / 2.2046226218;
        $this->weight_kg = round($lbs, 2);
    }

}

class Unicycle extends Bicycle {

    protected $wheels = 1;

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