<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <?php
    include 'mathfunctions.php'; // Include the mathfunctions.php file

    if (isset($_GET['number'])) {
        $num = $_GET['number'];

        if (isPositiveInteger($num)) {
            $factorial = factorial($num);
            echo "<h2>The Following is the Factorial</h2>";
            echo "<p>", $num, "! is ", $factorial, "</p>";
        } else {
            echo "<p>Please enter a positive integer</p>";
        }
    } 

    echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>";
    ?>
</body>
</html>
