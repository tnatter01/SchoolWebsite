<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sprint2.css">
    <meta charset="UTF-8">
    <title>Eredivisie 2</title>

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
<link rel="stylesheet" type="text/css" href="eredivisie.css">
			<?php

            $teams = array(
                "ADO" => array (
                    "naam" => 'ADO Den Haag',
                    "plaats" => 'Den Haag',
                    "gespeeld" => 24,
                    "winst" => 10,
                    "gelijk" => 5,
                    "verlies" => 9,
                    "punten" => 35,
                ),
                "AZ" => array (
                    "naam" => 'AZ Alkmaar',
                    "plaats" => 'Alkmaar',
                    "gespeeld" => 24,
                    "winst" => 15,
                    "gelijk" => 5,
                    "verlies" => 4,
                    "punten" => 50,
                ),
                "Ajax" => array (
                    "naam" => 'Ajax',
                    "plaats" => 'Amsterdam',
                    "gespeeld" => 24,
                    "winst" => 18,
                    "gelijk" => 3,
                    "verlies" => 3,
                    "punten" => 57,
                ),
                "Excelsior" => array (
                    "naam" => 'Excelsior',
                    "plaats" => 'Rotterdam',
                    "gespeeld" => 24,
                    "winst" => 8,
                    "gelijk" => 5,
                    "verlies" => 11,
                    "punten" => 29,
                ),
                "Groningen" => array (
                    "naam" => 'FC Groningen',
                    "plaats" => 'Groningen',
                    "gespeeld" => 24,
                    "winst" => 5,
                    "gelijk" => 9,
                    "verlies" => 10,
                    "punten" => 24,
                ),
                "Twente" => array (
                    "naam" => 'FC Twente',
                    "plaats" => 'Enschede',
                    "gespeeld" => 24,
                    "winst" => 4,
                    "gelijk" => 5,
                    "verlies" => 15,
                    "punten" => 17,
                ),
                "Utrecht" => array (
                    "naam" => 'FC Utrecht',
                    "plaats" => 'Utrecht',
                    "gespeeld" => 24,
                    "winst" => 11,
                    "gelijk" => 8,
                    "verlies" => 5,
                    "punten" => 41,
                ),
                "Feyenoord" => array (
                    "naam" => 'Feyenoord',
                    "plaats" => 'Rotterdam',
                    "gespeeld" => 24,
                    "winst" => 13,
                    "gelijk" => 5,
                    "verlies" => 6,
                    "punten" => 44,
                ),
                "NAC" => array (
                    "naam" => 'NAC Breda',
                    "plaats" => 'Breda',
                    "gespeeld" => 24,
                    "winst" => 5,
                    "gelijk" => 5,
                    "verlies" => 14,
                    "punten" => 20,
                ),
                "PEC" => array (
                    "naam" => 'PEC Zwolle',
                    "plaats" => 'Zwolle',
                    "gespeeld" => 24,
                    "winst" => 11,
                    "gelijk" =>6,
                    "verlies" => 7,
                    "punten" => 39,
                ),
                "PSV" => array (
                    "naam" => 'PSV',
                    "plaats" => 'Eindhoven',
                    "gespeeld" => 24,
                    "winst" => 20,
                    "gelijk" => 2,
                    "verlies" => 2,
                    "punten" => 62,
                ),
                "Roda" => array (
                    "naam" => 'Roda JC',
                    "plaats" => 'Kerkrade',
                    "gespeeld" => 24,
                    "winst" => 4,
                    "gelijk" => 5,
                    "verlies" => 15,
                    "punten" => 17,
                ),
                "Heerenveen" => array (
                    "naam" => 'SC Heerenveen',
                    "plaats" => 'Heerenveen',
                    "gespeeld" => 24,
                    "winst" => 8,
                    "gelijk" => 8,
                    "verlies" => 8,
                    "punten" => 32,
                ),
                "Heracles" => array (
                    "naam" => 'SC Heracles',
                    "plaats" => 'Almelo',
                    "gespeeld" => 24,
                    "winst" => 7,
                    "gelijk" => 6,
                    "verlies" => 11,
                    "punten" => 27,
                ),
                "Sparta" => array (
                    "naam" => 'Sparta',
                    "plaats" => 'Rotterdam',
                    "gespeeld" => 24,
                    "winst" => 3,
                    "gelijk" => 6,
                    "verlies" => 15,
                    "punten" => 15,
                ),
                "VVV" => array (
                    "naam" => 'VVV-Venlo',
                    "plaats" => 'Venlo',
                    "gespeeld" => 24,
                    "winst" => 7,
                    "gelijk" => 9,
                    "verlies" => 8,
                    "punten" => 30,
                ),
                "Vitesse" => array (
                    "naam" => 'Vitesse',
                    "plaats" => 'Arnhem',
                    "gespeeld" => 24,
                    "winst" => 10,
                    "gelijk" => 7,
                    "verlies" => 7,
                    "punten" => 37,
                ),
                "Willem2" => array (
                    "naam" => 'Willem II',
                    "plaats" => 'Tilburg',
                    "gespeeld" => 24,
                    "winst" => 5,
                    "gelijk" => 5,
                    "verlies" => 14,
                    "punten" => 20,
                ),
            );

            function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
                $sort_col = array();
                foreach ($arr as $key=> $row) {
                    $sort_col[$key] = $row[$col];
                }

                array_multisort($sort_col, $dir, $arr);
            }


            array_sort_by_column($teams, 'punten');


        echo "<table border='1'>";
        echo "<tr>";
            echo "<th>Naam</th>";
            echo "<th>Plaats</th>";
            echo "<th>Gespeeld</th>";
            echo "<th>Winst</th>";
            echo "<th>Gelijk</th>";
            echo "<th>Verlies</th>";
            echo "<th>Punten</th>";

            echo "</tr>";


        foreach ($teams as $each){

            echo "<tr>";


            foreach ($each as $accesories){

                echo "<td>" . $accesories . "</td>";

            }
            echo "</tr>";

        }
        echo "</table>";


?>

</body>
</html>