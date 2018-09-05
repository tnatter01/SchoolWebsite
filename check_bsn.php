<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sprint2.css">
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>

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
<form action=""
      method="POST"
      name="bsn">


    <input type="text" name="BSN" placeholder="BSN" maxlength="9">
    <input type="submit" name="Verzenden">

</form>


<?php

if(isset($_POST['Verzenden'])) {

    $bsn = $_POST["BSN"];

    if (is_numeric($bsn)) {
        if (strlen($bsn) == 9) {
            $bsn_array  = str_split ($bsn);
            $elfproef = ($bsn_array[0] * 9 + $bsn_array[1] * 8 + $bsn_array[2] * 7 + $bsn_array[3] * 6 + $bsn_array[4] * 5 + $bsn_array[5] * 4 + $bsn_array[6] * 3 + $bsn_array[7] * 2 + $bsn_array[8] * -1) / 11;
            if (is_int ($elfproef)) {
                echo "Jij hebt een correcte BSN ingevuld.";
            } else {
                echo "Jouw ingevulde BSN nummer is niet correct, omdat de elfproef niet is geslaagd.";
            }
        } else {
            echo "Jouw ingevulde BSN nummer is niet correct, omdat het niet 9 cijfers lang is.";
        }
    } else {
        echo "Jouw ingevulde BSN nummer is niet correct, omdat het niet alleen uit cijfers bestaat.";
    }
}
?>



</body>
</html>
