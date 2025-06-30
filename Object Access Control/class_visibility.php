<?php

class Example {

    // PROPERTIES
    public $a; // Anywhere (default)
    protected $b; // Inside this class and its subclasses
    private $c; // Inside the class only (for only internal purposes)

    // GETTERS
    public function get_c() {
        return $this->c;
    }

    // SETTERS
    public function set_c($c) {
        $this->c = $c;
    }
}

// Class initalization in PHP
class Student {

    // Instance variables (called properties in PHP)
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
    private $tuition = 500.00;

    public function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    public function hello_world() {
        return "Hello world!";
    }

    protected function hello_family() {
        return "Hello family!";
    }


    private function hello_me() {
        return "Hello world!";
    }

    public function tuition_fmt() {
        return '$' . $this->tuition;
    }

}

class PartTimeStudent extends Student {
    public function hello_parent() {
        return $this->hello_family();
    }
}



// Student 1
// $student1 = new Student;
$student1 = new PartTimeStudent;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

// echo $student1->registration_id;

echo $student1->hello_world() . "<br>";
echo $student1->hello_parent() . "<br>";
// echo $student2->hello_family() . "<br>";
// echo $student2->hello_me() . "<br>";

?>