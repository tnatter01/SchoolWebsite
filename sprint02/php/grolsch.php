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
    /**
     * Created by PhpStorm.
     * User: Twan
     * Date: 9-3-2018
     * Time: 10:17
     */
    /**
     * Created by PhpStorm.
     * User: Twan
     * Date: 19-2-2018
     * Time: 11:14
     */

    $leeftijd = rand(10,30);


    if($leeftijd < 18) {
        echo "Jouw leeftijd is $leeftijd jaar. Je bent nog niet oud genoeg om alcohol te drinken. <br>";
        echo 'Klik hieronder om naar de site van Alcoholinfo te gaan.';
        echo '<form>';
        echo '<input target="_self" type="button" value="Klik hier" onclick="window.location.href=\'https://www.alcoholinfo.nl/publiek\'" />';
        echo '</form>';
    }
    else {
        echo "Jouw leeftijd is $leeftijd jaar. Je bent oud genoeg om alcohol te drinken. <br>";
        echo 'Klik hieronder om naar de site van Grolsch te gaan.';
        echo '<form>';
        echo '<input target="_self" type="button" value="Klik hier" onclick="window.location.href=\'http://www.grolsch.nl/\'" />';
        echo '</form>';


    }
    ?>
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>