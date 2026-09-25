<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Student Grade Calculator</h1>

<form method="post">

    Student Name:
    <input type="text" name="name" required><br><br>

    Grade 1:
    <input type="number" name="grade1" required><br><br>

    Grade 2:
    <input type="number" name="grade2" required><br><br>

    Grade 3:
    <input type="number" name="grade3" required><br><br>

    <input type="submit" value="Calculate">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];
    $grade3 = $_POST["grade3"];

    $average = ($grade1 + $grade2 + $grade3) / 3;

    echo "<h2>Result</h2>";
    echo "Student: " . $name . "<br>";
    echo "Average: " . round($average, 2) . "<br>";

    if ($average >= 75) {
        echo "Status: Passed";
    } else {
        echo "Status: Failed";
    }
}

?>

</body>
</html>
