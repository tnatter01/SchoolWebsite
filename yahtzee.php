<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sprint2.css">
    <meta charset="UTF-8">
    <title>Yahtzee</title>

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
<h43>Yahtzee</h43>
<form method="post">
    <input type="submit" name="knop" value="Gooi">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 20-2-2018
 * Time: 09:34
 */


session_start();

$_SESSION["worpen"] += 1;







    if (isset($_POST['knop'])) {


        $worpen = $_SESSION['worpen'];

        $dobbel1 = rand(1, 6);
        $dobbel2 = rand(1, 6);
        $dobbel3 = rand(1, 6);
        $dobbel4 = rand(1, 6);
        $dobbel5 = rand(1, 6);

        $dobbel6 = $dobbel1 + $dobbel2 + $dobbel3 + $dobbel4 + $dobbel5;

        echo "$dobbel1<br>";
        echo "$dobbel2<br>";
        echo "$dobbel3<br>";
        echo "$dobbel4<br>";
        echo "$dobbel5<br>";

        echo "<br> het aantal van alle Dobbelstenen bij elkaar: $dobbel6<br>";

        if ($dobbel1 == $dobbel5 && $dobbel2 == $dobbel5 && $dobbel3 == $dobbel5 && $dobbel4 == $dobbel5 && $dobbel5 == $dobbel5) {
            echo "<br><b>yathzee!</b><br>";
            echo "Er is 5 keer een $dobbel1 gegooid<br>";
            echo "Er is in totaal $worpen keer gegooid!<br>";


            $_SESSION["worpen"] = 0;
        }
    }
    ?>

</body>
</html>