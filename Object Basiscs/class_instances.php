<?php

class Student {

}

$student1 = new Student;
$student2 = new Student;

echo get_class($student1) . "<br>";

$class_names = ['Product', 'student', 'Student'];
foreach($class_names as $class_name) {
    if (is_a($student1, $class_name)) {
        echo "student1 is a {$class_name} class. <br>";
    } else {
        echo "student1 is not a {$class_name} class. <br>";
    }
}

?>