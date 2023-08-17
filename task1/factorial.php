<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <?php
    include 'mathfunctions.php'; // Include the mathfunctions.php file

    $num = 5; // Replace with user input later

    if (isPositiveInteger($num)) {
        $factorial = factorial($num);
        echo "<p>" , $num ,"! is", $factorial ($num), "</p>" ;
    } else {
        echo "<p>Please enter a positive integer</p>" ;
    }

    echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>"
    ?>
</body>
</html>