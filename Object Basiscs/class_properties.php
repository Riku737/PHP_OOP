<?php

// Class initalization in PHP
class Student {

    // Instance variables (called properties in PHP)
    var $first_name;
    var $last_name;
    var $country = 'None';

}

// Student 1
$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

// Student 2
$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';

// Prints instances of Student
echo $student1->first_name . " " . $student1->last_name . "<br>";
echo $student2->first_name . " " . $student2->last_name . "<br>";

// Prints default instance variables found in Student class
$class_vars = get_class_vars('Student');
echo "Class vars: <br>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

// Prints specific instance variables to instance of Student referenced in $student1
$object_vars = get_object_vars($student1);
echo "Class vars: <br>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

// Prints whether instance variable "first_name" is in Student class.
if (property_exists('Student', 'first_name')) {
    echo "Property first_name exists in Student class. <br>";
} else {
    echo "Property first_name does not exist in Student class.";
}

?>