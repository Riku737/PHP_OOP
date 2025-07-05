<?php

class Person {

    // Instance variables (called properties in PHP)
    public $name;
    public $type;
    public $age;
    
    /**
     * Constructor (a magic method)
     * * Initalize values
     * * Order of arguments matter
     * * Cannot pass in less or more (not dynamc)
     */
    // 
    
    // public function __construct($name) {
    //     $this->name = $name;
    // }


    /**
     * Using an array argument is a common technique to make the constructor less sensitive to parameters.
     * It allows for greater flexibility overall (dynamic arguments)
     * Using an array for a constructor can be good practice in PHP:
     * - Flexibility with parameters
     * - Optional arguments
     * - Readability
     * - Scalability
     */
    public function __construct($args=[]) {
        $this->name = $args['name'] ?? null;
        $this->typee = $args['type'] ?? null;
        $this->age = $args['age'] ?? null;
    }

}

$joe = new Person(['name'=>'John', 'type'=>'student', 'age'=>12]);

class Sofa {

    // Instance variables (called properties)

    public static $instance_count = 0; // Class variable

    public $seats = 3;
    public $arms = 2;

    // Constructor
    public function __construct($args=[]) { // Use array as argument to allow for dynamic constructors (good practice)
        self::$instance_count++;
        $this->seats = $args['seats'] ?? $this->seats;
        $this->arms = $args['arms'] ?? $this->arms;
    }

}

class Coach extends Sofa {
    var $arms = 0;
}

class Loveseat extends Sofa {
    var $seats = 2;
}

$sofa = new Sofa(['seats' => 3, 'arms' => 2]);

echo "
<h1>Sofa</h1>
<p>Arms: {$sofa->arms}</p>
<p>Seats: {$sofa->seats}</p>
<p>Count: " . Sofa::$instance_count . "</p>
";

$coach = new Coach(['seats' => 1, 'arms' => 2]);

echo "
<h1>Coach</h1>
<p>Arms: {$coach->arms}</p>
<p>Seats: {$coach->seats}</p>
<p>Count: " . Coach::$instance_count . "</p>
";

$loveseat = new Loveseat(['seats' => 0, 'arms' => 2]);

echo "
<h1>Loveseat</h1>
<p>Arms: {$loveseat->arms}</p>
<p>Seats: {$loveseat->seats}</p>
<p>Count: " . Sofa::$instance_count . "</p>
";


?>