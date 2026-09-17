<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice 4 Result</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table Result</h1>
    <?php
    if (isset($_POST["size"])) {
        $num = intval($_POST["size"]);
        echo "<table>";
        
        echo "<tr><th>&nbsp;</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        for ($row = 1; $row <= $num; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";
            for ($col = 1; $col <= $num; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No size specified.</p>";
    }
    ?>
    <br>
    <a href="practice4.html">Back to Generator</a> | <a href="index.html">Back to Main Index</a>
</body>
</html>
