<?php

class Person {

    var $first_name;
    var $last_name;
    var $socialSecurityNumber;
    var $age;
    var $gender;
    var $address;
    var $telephoneNumber;

    function __construct() {
        $this->first_name = "";
        $this->last_name = "";
        $this->socialSecurityNumber = "";
        $this->age = "";
        $this->gender = "";
        $this->address = "";
        $this->telephoneNumber = "";
    }

    function full_name() {
        return $this->first_name . " " . $this->last_name;    
    }

}

class Student extends Person {
    var $GPA;
    var $major;
    var $graduationYear; 
}

abstract class Employee extends Person {
    var $department;
    var $jobTitle;
    var $hireYear;
    
    function __construct() {
        parent::__construct();
        $this->department = "";
        $this->jobTitle = "";
        $this->hireYear = "";
    }

    abstract public function calculateWeeklySalary();
    abstract public function computeHealthCareContribution();
    abstract public function vacationDaysEarnedThisWeek();
}

class Professional extends Employee {
    var $monthlySalary;
    var $fixedVacationDays;
    var $healthInsuranceContribution;

    function __construct() {
        parent::__construct();
        $this->monthlySalary = 0;
        $this->fixedVacationDays = 0;
        $this->healthInsuranceContribution = 0;
    }

    function calculateWeeklySalary() {
        return $this->monthlySalary / 4;
    }

    function computeHealthCareContribution() {

    }

    function vacationDaysEarnedThisWeek() {

    }

}

// class Nonprofessional extends Employee {

// }

$p = new Professional();

$p->first_name = "John";
$p->last_name = "Doe";
$p->monthlySalary = 5000;

echo $p->calculateWeeklySalary();

?>