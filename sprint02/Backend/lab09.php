


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
    /**
     * Created by PhpStorm.
     * User: Twan
     * Date: 19-10-2018
     * Time: 10:10:03
     */
if(isset($_POST["vertrek"])){$vertrek = $_POST["vertrek"];}
if(isset($_POST["bestemming"])){$bestemming = $_POST["bestemming"];}


    function reiskosten($vertrek, $bestemming){
        $reiskosten = array();
        $reiskosten[1] = array();
        $reiskosten[2] = array();
        $reiskosten[3] = array();
        $reiskosten[4] = array();
        $reiskosten[1][1] = 0;
        $reiskosten[1][2] = 30;
        $reiskosten[1][3] = 60;
        $reiskosten[1][4] = 90;
        $reiskosten[2][1] = 30;
        $reiskosten[2][2] = 0;
        $reiskosten[2][3] = 40;
        $reiskosten[2][4] = 20;
        $reiskosten[3][1] = 60;
        $reiskosten[3][2] = 40;
        $reiskosten[3][3] = 0;
        $reiskosten[3][4] = 10;
        $reiskosten[4][1] = 90;
        $reiskosten[4][2] = 20;
        $reiskosten[4][3] = 10;
        $reiskosten[4][4] = 0;
        return($reiskosten[$vertrek][$bestemming]);
    }
    ?>

    <h2>
        Reiskosten
    </h2>

    <form method="post" action="">
        Vertrek: <select name="vertrek">
            <option value="1">Amsterdam</option>
            <option value="2">Utrecht</option>
            <option value="3">Den Haag</option>
            <option value="4">Rotterdam</option>
        </select>
        Bestemming: <select name="bestemming">
            <option value="1">Amsterdam</option>
            <option value="2">Utrecht</option>
            <option value="3">Den Haag</option>
            <option value="4">Rotterdam</option>
        </select>
        <input type="submit" value="Berekenen" name="submit">
    </form>
    <hr />
    <?php
    if(isset($_POST["submit"])){
        echo "De berekende reikosten zijn: " . reiskosten($vertrek, $bestemming);
    }
    ?>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>

