<?php

class Awesome {

    // Constructor method
    public function __construct() {

    }

    /**
     * Destructor method
     * - Unlike construct, destruct does not take in any arguments
     * - Called whenever the last reference to an instance is removed (object is destroyed)
     *      - Unset() the instance
     *      - When the script ends
     * - Useful for logging or other clean up actions
     * - Less used overall in PHP
     */
    public function __destruct() {

    }
}

class Sofa {
    public static $instance_count = 0;

    public $seats = 3;
    public $arms = 2;

    public function __construct() {
        self::$instance_count++;
    }

    public function __destruct() {
        self::$instance_count--;
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

unset($sofa);
// Unsets variable, nothing points to the object in memory anymore.
// PHP sees it as trash and the destruct method and gets rid of it.
// $instance_count = 0

$loveseat = new Loveseat();
echo "
<h1>Loveseat</h1>
<p>Arms: {$loveseat->arms}</p>
<p>Seats: {$loveseat->seats}</p>
<p>Count: " . Sofa::$instance_count . "</p>
";

?>