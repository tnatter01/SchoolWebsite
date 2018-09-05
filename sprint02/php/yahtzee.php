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
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>