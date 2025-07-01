<?php

class Bicycle {
    static public $instance_count = 0;

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    public $category;
    protected $weight_kg = 0.0;
    static protected $wheels = 2;

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    static public function create() {
        $class_name = get_called_class();
        $instance = new $class_name;
        // $instance = new static;
        self::$instance_count++;
        return $instance;
    } 

    public function name() {
        return "{$this->brand}, {$this->model}, {$this->year}, {$this->category}";
    }

    static public function wheel_details() {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels .  " wheels";
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

    static protected $wheels = 1;

}


$derailleur = new Bicycle;
$derailleur->brand = "Supercycle Reaction";
$derailleur->model = "Sunrun Derailleur";
$derailleur->year = "2025";
$derailleur->description = "Versatile and well-equipped hardtail mountain bike.";
$derailleur->set_weight_lbs(36.51);

$bike = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle count: " . Bicycle::$instance_count . "<br>";
echo "Unicycle count: " . Unicycle::$instance_count;

echo "<hr>";

echo "Categories: " . implode(', ', Bicycle::CATEGORIES) . "<br>";
$derailleur->category = Bicycle::CATEGORIES[1];

echo "<hr>";

echo $derailleur->name();

?>