<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body> 
    <h1>PHP  Variables, arrays and operators</h1>
    <?php
    $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $daysinFrench = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
    echo "<p> The days of the week in English are: </p>";
    echo "<ul>";
    for ($i = 0; $i < count($days); $i++) {
        echo "<li>$days[$i]</li>";
    }
    echo "</ul>";
    echo "<p> The days of the week in French are: </p>";
    echo "<ul>";
    for ($i = 0; $i < count($daysinFrench); $i++) {
        echo "<li>$daysinFrench[$i]</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>