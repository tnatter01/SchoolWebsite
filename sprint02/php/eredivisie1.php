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
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/eredivisie.css">
</head>
<body>
<div class="main">
    <?php

    $teams = array

    (

        array(12," Heracles "," Almelo ",21,6,6,9),

        array(15," FC Twente "," Enschede ",21,4,4,13),



    );



    echo '<table class="eredivisiestand">';

    echo "<tr>";

    echo '<th colspan="7">Eredivisiestand 7-2-2018</th>';

    echo "</tr>";

    echo "<tr>";

    echo "<td>Plaats</td>";

    echo "<td>Naam</td>";

    echo "<td>Stad</td>";

    echo "<td>Gespeelde westrijden</td>";

    echo "<td>Gewonnen wedstrijden</td>";

    echo "<td>Gelijkgespeelde wedstrijden</td>";

    echo "<td>Verloren wedstrijden</td>";

    echo "</tr>";

    echo "<tr>";

    echo "<td>".$teams[0][0]."</td>";

    echo "<td>".$teams[0][1]."</td>";

    echo "<td>".$teams[0][2]."</td>";

    echo "<td>".$teams[0][3]."</td>";

    echo "<td>".$teams[0][4]."</td>";

    echo "<td>".$teams[0][5]."</td>";

    echo "<td>".$teams[0][6]."</td>";

    echo "</tr>";

    echo "<tr>";

    echo "<td>".$teams[1][0]."</td>";

    echo "<td>".$teams[1][1]."</td>";

    echo "<td>".$teams[1][2]."</td>";

    echo "<td>".$teams[1][3]."</td>";

    echo "<td>".$teams[1][4]."</td>";

    echo "<td>".$teams[1][5]."</td>";

    echo "<td>".$teams[1][6]."</td>";

    echo "</tr>";

    echo "</table>";



    ?>
</div>
<?php include '../sidebar.php'; ?>


</body>

</html>