<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sprint2.css">
    <meta charset="UTF-8">
    <title>Celsius Fahrenheit Kelvin</title>
    <style>
        .blauw {background-color: blue}
        .groen {background-color: green}
    </style>
</head>
<body>
<ul>
    <li><a class="active" href="index.html">Home</a></li>


    <li><a href="oneven.php">Oneven</a></li>
    <li><a href="grolsch.php">Grolsch</a></li>
    <li><a href="celsius_fahrenheit_kelvin.php">Temperaturen</a></li>
    <li><a href="yahtzee.php">Yahtzee</a></li>
    <li><a href="fibonacci.php">Fibonacci</a></li>
    <li><a href="check_bsn.php">Check BSN</a></li>
    <!--<li><a href="dobbel2.php">Dobbel 2</a></li>
   <li><a href="onzegroep2.php">Onzegroep 2</a></li>-->
    <li><a href="eredivisie2.php">Eredivisie 2</a></li>
    <!--<li><a href="lab04.php">Lab 04</a></li>
    <li><a href="lab05.php">Lab 05</a></li>
    <li><a href="lab06.php">Lab 06</a></li>
    <li><a href="lab07.php">Lab 07</a></li>
    <li><a href="lab08.php">Lab 08</a></li>-->




</ul>
<?php

$celsius = -50;
$fahrenheit = -58;
$kelvin = 223.15;

echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Celsius</th>";
echo "<th>Fahrenheit</th>";
echo "<th>Kelvin</th></tr>";
while ( $celsius <= 50 ) {
    if ($celsius < 0) {
        echo "<tr><td class='blauw'>";
    } else {
        echo "<tr><td class='groen'>";
    }
    echo "$celsius °C";

    if ($fahrenheit < 32) {
        echo "</td><td class='blauw'>";
    } else {
        echo "</td><td class='groen'>";
    }
    echo "$fahrenheit °F";

    if ($kelvin <= 272.15) {
        echo "</td><td class='blauw'>";
    } else {
        echo "</td><td class='groen'>";
    }
    echo "$kelvin K ";
    echo "</td></tr>";
    $celsius = $celsius + 1;
    $fahrenheit = $celsius * 1.8 + 32;
    $kelvin = $celsius + 273.15;
}
?>


</body>
</html>