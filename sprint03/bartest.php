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
    <link rel="stylesheet" href="style/style.css"
</head>
<body>


</div>

<div class="main">

    <button type="button" onclick='window.location.reload(true);'>Nieuwe kaart</button>

    <p>

        <?php

        $kleuren = array("ruiten", "harten", "klaveren", "schoppen");

        $waarden = array("boer", "vrouw", "heer", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        $randomkleur1 = (rand(0, 3));
        $randomkleur2 = (rand(0, 3));
        $randomkleur3 = (rand(0, 3));
        $randomkleur4 = (rand(0, 3));
        $randomkleur5 = (rand(0, 3));


        $randomwaarde1 = (rand(0, 11));
        $randomwaarde2 = (rand(0, 11));
        $randomwaarde3 = (rand(0, 11));
        $randomwaarde4 = (rand(0, 11));
        $randomwaarde5 = (rand(0, 11));

        $image1 = $kleuren[$randomkleur1] . "_" . $waarden[$randomwaarde1] . ".svg";
        $image2 = $kleuren[$randomkleur2] . "_" . $waarden[$randomwaarde2] . ".svg";
        $image3 = $kleuren[$randomkleur3] . "_" . $waarden[$randomwaarde3] . ".svg";
        $image4 = $kleuren[$randomkleur4] . "_" . $waarden[$randomwaarde4] . ".svg";
        $image5 = $kleuren[$randomkleur5] . "_" . $waarden[$randomwaarde5] . ".svg";


        echo "Eerste kaart: $kleuren[$randomkleur1]  $waarden[$randomwaarde1]";
        echo "<br>Tweede kaart: $kleuren[$randomkleur2]  $waarden[$randomwaarde2]";
        echo "<br>Derde kaart: $kleuren[$randomkleur3]  $waarden[$randomwaarde3]";
        echo "<br>Vierde kaart: $kleuren[$randomkleur4]  $waarden[$randomwaarde4]";
        echo "<br>Vijfde kaart: $kleuren[$randomkleur5]  $waarden[$randomwaarde5]";


        echo "<br><img src=../kaarten/".$image1.">";
        echo "<br><img src=../kaarten/".$image2.">";
        echo "<br><img src=../kaarten/".$image3.">";
        echo "<br><img src=../kaarten/".$image4.">";
        echo "<br><img src=../kaarten/".$image5.">";


        ?>

</div>
<?php include 'sidebar.php'; ?>
</body>

</html>