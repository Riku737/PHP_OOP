<?php

class Chef {
    public static function make_dinner() {
        echo "Cook food. <br>";
    }
}

class AmateaurChef extends Chef {
    public static function make_dinner() {
        echo "Read recipe.<br>";
        parent::make_dinner();
        echo "Clean up mess.<br>";
    }
}

echo "Chef: <br>";
echo Chef::make_dinner() . "<br>";
echo "Amateaur Chef: <br>";
echo AmateaurChef::make_dinner() . "<br>";


?>