<?php
// start session
session_start();
// if session variable not set, initialize it
if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
}
// increment count on each page refresh
$_SESSION['views']++;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Views Counter</title>
    </head>
    <body>
        <h2>Session Page Views Counter</h2>
        <p>You have visited this page:</p>
        <h3><?php echo $_SESSION['views']; ?> times</h3>
    </body>
</html>