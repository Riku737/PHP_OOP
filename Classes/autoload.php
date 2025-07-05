<?php

function my_autoload($class_name) {
    if (preg_match('/\A\w+\Z/', $class_name)) {
        include $class_name . '.php'; 
    }
}

spl_autoload_register('my_autoload');

$bike = new Bicycle;
$bike->brand = "Joe";
echo $bike->brand;

$unibike = new Unicycle;

?>