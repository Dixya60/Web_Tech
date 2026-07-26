<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "testdb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Array of multiple data to insert
$students = [
    ["name" => "Ram", "age" => 20, "city" => "Kathmandu"],
    ["name" => "Sita", "age" => 22, "city" => "Pokhara"],
    ["name" => "Hari", "age" => 21, "city" => "Lalitpur"]
];

// Insert each record into the table
foreach ($students as $student) {

    $name = $student['name'];
    $age = $student['age'];
    $city = $student['city'];

    $sql = "INSERT INTO students (name, age, city) 
            VALUES ('$name', $age, '$city')";

    mysqli_query($conn, $sql);
}

echo "Multiple records inserted successfully!";

mysqli_close($conn);

?>