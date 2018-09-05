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
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>