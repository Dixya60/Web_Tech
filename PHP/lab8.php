<?php

// Connect to MySQL server
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

echo "Connected to MySQL successfully !<br><br>";

// 1. Create Database
$sql1 = "CREATE DATABASE IF NOT EXISTS student_db";

if (mysqli_query($conn, $sql1)) {
    echo "Database created successfully !<br>";
} else {
    echo "Error creating database : " . mysqli_error($conn);
}

// 2. Select Database
mysqli_select_db($conn, "student_db");

// 3. Create Table
$sql2 = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT
)";

if (mysqli_query($conn, $sql2)) {
    echo "Table created successfully !<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// 4. Add one column
$sql3 = "ALTER TABLE students ADD Email VARCHAR(255)";

if (mysqli_query($conn, $sql3)) {
    echo "Column 'Email' added successfully !<br>";
} else {
    echo "Error adding column (maybe already exists) <br>";
}

// Close connection
mysqli_close($conn);

?>