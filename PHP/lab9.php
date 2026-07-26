<?php
// Set cookie
setcookie("username", "Dikshya", time() + 3600);
setcookie("role", "Student", time() + 3600);  // cookie will expire in 1 hour
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>

<body>
    <h2>Cookie Values</h2>
    <?php
    if (isset($_COOKIE["username"]) || isset($_COOKIE["role"])) {
        echo "Cookie username : " . ($_COOKIE["username"] ?? "Not set") . "<br>";
        echo "Cookie role : " . ($_COOKIE["role"] ?? "Not set") . "<br>";

    } else {
        echo "Cookies are not set yet. Refresh the page.";
    }
    ?>
</body>
</html>