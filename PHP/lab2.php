<?php

$a = 10;
$b = 5;

// Arithmetic Operators
echo "<h3>Arithmetic Operators:</h3>";
echo "Addition of $a and $b is: " . ($a + $b) . "<br>";
echo "Subtraction of $a and $b is: " . ($a - $b) . "<br>";
echo "Multiplication of $a and $b is: " . ($a * $b) . "<br>";
echo "Division of $a and $b is: " . ($a / $b) . "<br>";

// Comparison Operators
echo "<h3>Comparison Operators:</h3>";
echo "$a is equal to $b: " . ($a == $b ? "True" : "False") . "<br>";
echo "$a is not equal to $b: " . ($a != $b ? "True" : "False") . "<br>";
echo "$a is greater than $b: " . ($a > $b ? "True" : "False") . "<br>";
echo "$a is less than $b: " . ($a < $b ? "True" : "False") . "<br>";

// Logical Operators
echo "<h3>Logical Operators:</h3>";
echo "$a > 0 AND $b > 0: " . (($a > 0 && $b > 0) ? "True" : "False") . "<br>";
echo "$a > 0 OR $b < 0: " . (($a > 0 || $b < 0) ? "True" : "False") . "<br>";
echo "NOT ($a > $b): " . (!( $a > $b ) ? "True" : "False") . "<br>";

?>