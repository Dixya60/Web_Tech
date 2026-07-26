<!-- Display php-->

<!DOCTYPE html>
<html>
    <head>
        <title>Data</title>
    </head>

    <body>

        <?php
        // ONLY RUN AFTER SUBMIT
        if (isset($_POST['submit'])) {

            $name = $_POST['name'] ?? "";
            $gender = $_POST['gender'] ?? "";
            $country = $_POST['country'] ?? "";
            $hobbies = $_POST['hobbies'] ?? [];

            echo "<h2>User Submitted Data</h2>";

            echo "Name: $name <br>";
            echo "Gender: $gender <br>";
            echo "Country: $country <br>";

            echo "Hobbies: ";
            if (!empty($hobbies)) {
                foreach ($hobbies as $hobby) {
                    echo $hobby . " ";
                }
            } else {
                echo "None";
            }
        }
        ?>

</body>
</html>
