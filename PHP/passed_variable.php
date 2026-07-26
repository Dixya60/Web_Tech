<!-- PAGE 2 -->

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
} else {
    $name = "Not provided";
    $age = "Not provided";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Received Data</title>
    </head>

    <body>
        <h2>Data Received from URL</h2>
        <?php
        echo "Name : " . $name . "<br>";
        echo "Age : " . $age . "<br>";
        ?>
    </body>
</html>