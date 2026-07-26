<?php

$file = "data.txt";
$fp = fopen($file, "r");

if ($fp) {
    echo "<h2>File Content</h2>";

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Line No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
          </tr>";
    $lineNo = 1; // line counter

    while (!feof($fp)) {
        $line = fgets($fp);

        if (trim($line) != "") {
            $row = explode(",", trim($line));

            echo "<tr>";
            echo "<td>" . $lineNo . "</td>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";

            $lineNo++; // increase line number
        }
    }
    echo "</table>";
    fclose($fp);

} else {
    echo "File cannot be opened!";
}

?>


<!--
    Data.txt contains 
    Dikshya,21,IT
    Mamata,20,CS
    Pujan,22,BCA
    Rita, 21, BIM 
-->