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



<div class="main">
    <?php

    $naam = "Karim";

    $naam2 = "Sophie";

    $nederlands = "8.5";

    $engels = "7.7";

    $rekenen = "6.7";

    $programmeren = "8.5";

    $databases = "9.4";

    $nederlands2 = "8.9";

    $engels2 = "8.7";

    $rekenen2 = "9.7";

    $programmeren2 = "9.5";

    $databases2 = "9.2";

    $totaal = $nederlands + $engels + $rekenen + $programmeren + $databases;

    $totaal2 = $nederlands2 + $engels2 + $rekenen2 + $programmeren2 + $databases2;

    $gemiddeld = $totaal/5;

    $gemiddeld2 = $totaal2/5;

    $groepsgemiddeldentotaal = $gemiddeld + $gemiddeld2;

    $groepsgemiddelde = $groepsgemiddeldentotaal/2;



    echo "<table border='1'>";
    echo "<caption>";
    echo	"<strong>Rapport</strong>";
    echo "</caption>";
    echo "<thead>";
    echo "<tr><th>Naam</th><th>Nederlands</th><th>Engels</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th><th>Gemiddeld</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>$naam</td>";
    echo "<td>$nederlands</td>";
    echo "<td>$engels</td>";
    echo "<td>$rekenen</td>";
    echo "<td>$programmeren</td>";
    echo "<td>$databases</td>";
    echo "<td>$gemiddeld</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$naam2</td>";
    echo "<td>$nederlands2</td>";
    echo "<td>$engels2</td>";
    echo "<td>$rekenen2</td>";
    echo "<td>$programmeren2</td>";
    echo "<td>$databases2</td>";
    echo "<td>$gemiddeld2</td>";
    echo "</tr>";
    echo "</tbody>";

    echo "<tfoot>";
    echo "<tr><td colspan='6'>Groep gemiddeld</td>";
    echo "<td>$groepsgemiddelde</td></tr>";
    echo "</tfoot>";
    echo "</table>";

    ?>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>