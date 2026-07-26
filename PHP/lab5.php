<!-- FORM PAGE -->

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>

    <body>
        <h2>Login Form</h2>
        <form method="post">

            Username:
            <input type="text" name="username"><br><br>
            Password:
            <input type="password" name="password"><br><br>
            <input type="submit" name="login" value="Login">

        </form>

        <?php
        // predefined correct credentials
        $correctUser = "admin";
        $correctPass = "1234";

        if (isset($_POST['login'])) {

            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";

            if ($username == $correctUser && $password == $correctPass) {
                // redirect to welcome page
                header("Location: welcome.php");
                exit();

            } else {
                echo "<p style='color:red;'>Invalid username or password!</p>";
            }
        }
        ?>

    </body>
</html>