<?php

class Student {

    // Shared across all instance of the class and subclasses
    public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
    private static $total_students = 0;

    // Functions that belong to a class rather than any specific object instance
    public static function motto() {
        return "To learn PHP OOP";
    }

    public static function count() {
        return self::$total_students;
    }

    public static function add_student() {
        self::$total_students++;
    }

}

class PartTimeStudent extends Student {
}

echo Student::motto() . "<br>";
echo Student::$grades[0] . "<br>";
echo implode(', ', array: Student::$grades) . "<br>";

echo Student::add_student();
echo Student::count() . "<br>";

echo PartTimeStudent::add_student();
echo PartTimeStudent::add_student();
echo PartTimeStudent::add_student();
echo Student::count() . "<br>";
echo PartTimeStudent::motto() . "<br>";

PartTimeStudent::$grades[] = 'Alumni';
echo implode(', ', array: Student::$grades) . "<br>";


?>