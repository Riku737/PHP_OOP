<?php

class User {

    /**
     * Constrctuor methods
     * * Magic methods have a double underscore in front of it.
     * * They must have a public visibility modifier.
     */

    public function __construct() {
        
    }

    public function __destruct() {

    }

    public function __clone() {

    }

}

class Sofa {
    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct() {
        self::$instance_count++;
    }


}

class Coach extends Sofa {
    var $arms = 0;
}

class Loveseat extends Sofa {
    var $seats = 2;
}

$sofa = new Sofa();
echo "
<h1>Sofa</h1>
<p>Arms: {$sofa->arms}</p>
<p>Seats: {$sofa->seats}</p>
<p>Count: " . Sofa::$instance_count . "</p>
";

$loveseat = new Loveseat();
echo "
<h1>Loveseat</h1>
<p>Arms: {$loveseat->arms}</p>
<p>Seats: {$loveseat->seats}</p>
<p>Count: " . Sofa::$instance_count . "</p>
";


?>