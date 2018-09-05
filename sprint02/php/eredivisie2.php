<!DOCTYPE html>

<html lang="en">
<head>
    <title id="title">This is replaced by the filename</title>
    <script type="text/javascript">
        var url = window.location.pathname; // gets the pathname of the file
        var str = url.substring(url.lastIndexOf('/')+1); // removes everything before the filename
        var filename = str.replace(/%20/g, " "); // if the filename has multiple words separated by spaces, browsers do not like that and replace each space with a %20. This replace %20 with a space.
        document.getElementById("title").innerHTML = filename;
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
</head>
<body>


</div>

<div class="main">
    <link rel="stylesheet" type="text/css" href="../eredivisie.css">
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
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>