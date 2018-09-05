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

<?php include '../sidebar.php'; ?>
</div>

<div class="main">
    <button type="button" onclick='window.location.reload(true);'>Gooi je dobbelsteen!</button>

    <p>

        <?php $dobbel = array(rand(1,6), rand(1,6), rand(1,6), rand(1,6), rand(1,6));



        echo "U heeft gerold: ";

        echo "<br>";

        echo $dobbel[0];

        echo "<br>";

        echo $dobbel[1];

        echo "<br>";

        echo $dobbel[2];

        echo "<br>";

        echo $dobbel[3];

        echo "<br>";

        echo $dobbel[4];

        echo "<br>";





        $totaal = array_sum($dobbel);

        echo "Het totaal is " . $totaal . ".";



        ?>
</div>
</body>

</html>