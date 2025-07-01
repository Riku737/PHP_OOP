<?php

Class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected static $wheels = 2;
    protected static $identity = "Biycle clsss";

    public static function identity_test() {
        echo "Self: " . self::$identity . "<br>";
        echo "Static: " . static::$identity . "<br>";
        echo "get_class: " . get_class() . "<br>";
        echo "get_called_class: " . get_called_class() . "<br>";
    }

    private function name() {
        return "{$this->brand}, {$this->model}, {$this->year}";
    }

    public static function wheel_details() {
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
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

    protected static $wheels = 1;
    protected static $identity = "Unicycle";

}

echo Bicycle::wheel_details() . "<br>";
echo Unicycle::wheel_details() . "<hr>";

echo Bicycle::identity_test() . "<hr>";
echo Unicycle::identity_test();

?>