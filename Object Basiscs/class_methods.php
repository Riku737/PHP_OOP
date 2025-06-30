<?php

// Class initalization in PHP
class Student {

    // Instance variables (called properties in PHP)
    var $first_name;
    var $last_name;
    var $country = 'None';

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

    function say_hello() {
        return $this->full_name() . " says hello world!";
    }

}

// Student 1
$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

// Student 2
$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';

// Prints instance attributes of each Student
echo $student1->full_name() . "<br>";
echo $student2->full_name() . "<br>";

// Prints say_hello() method of each Student
echo $student1->say_hello() . "<br>";
echo $student2->say_hello() . "<br>";

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br>";

// Prints whether instance variable "first_name" is in Student class.
if (method_exists('Student', 'say_hello')) {
    echo "Method say_hello() exists in Student class. <br>";
} else {
    echo "Method say_hello() does not exist in Student class. <br>";
}

?>