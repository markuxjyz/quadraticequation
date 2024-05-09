<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discriminant of a Quadratic Equation</title>
    <style type="text/css">
    	.normal-weight {
    		font-weight: normal;
    	}
    </style>
</head>
<body>
    <h1>Discriminant of a Quadratic Equation</h1>
    <form method="POST" action="">
        <p>
            A:
            <input type="text" name="A">
        </p>
        <p>
            B:
            <input type="text" name="B">
        </p>
        <p>
            C:
            <input type="text" name="C">
        </p>
        <p>
            <input type="submit" value="Submit" name="Submit">
        </p>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $A = isset($_POST['A']) ? floatval($_POST['A']) : 0;
    $B = isset($_POST['B']) ? floatval($_POST['B']) : 0;
    $C = isset($_POST['C']) ? floatval($_POST['C']) : 0;

    // Calculates the discriminant
    $discriminant = $B * $B - 4 * $A * $C;

    // Displays the result
    echo "<h2>Discriminant: <span class='normal-weight'>$discriminant</span></h2>";
}
    ?>
</body>
</html>