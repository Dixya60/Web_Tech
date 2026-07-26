<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
    </head>

    <body>
        <h2>Student Registration Form</h2>

        <form method="post">
            Name:
            <input type="text" name="name"><br><br>
            Address:
            <input type="text" name="address"><br><br>
            Phone:
            <input type="text" name="phone"><br><br>
            Age:
            <input type="number" name="age"><br><br>
            Gender:
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        $conn = mysqli_connect("localhost", "root", "");

        // check connection
        if (!$conn) {
            die("Connection failed");
        }

        // create database
        mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS student_db");

        // select database
        mysqli_select_db($conn, "student_db");

        // create table
        $table = "CREATE TABLE IF NOT EXISTS students (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100),
            address VARCHAR(255),
            phone VARCHAR(15),
            age INT,
            gender VARCHAR(10)
        )";

        mysqli_query($conn, $table);

        // insert data when form submitted
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $age = $_POST['age'];
            $gender = $_POST['gender'] ?? "";

            $sql = "INSERT INTO students (name, address, phone, age, gender)
                    VALUES ('$name', '$address', '$phone', '$age', '$gender')";

            if (mysqli_query($conn, $sql)) {
                echo "<p style='color:green;'>Data inserted successfully!</p>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
        ?>

    </body>
</html>