<?php

class Student {
    
    public $name;
    public $age;

    public function displayInfo() {
        echo "Name: " . $this->name . " | Age: " . $this->age . "<br>";
    }
}

// Object 1
$s1 = new Student();
$s1->name = "Dikshya";
$s1->age = 21;

// Object 2
$s2 = new Student();
$s2->name = "Shrijana";
$s2->age = 20;

echo "<h2>Student Details</h2>";

$s1->displayInfo();
$s2->displayInfo();

?>