d

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sprint2.css">
    <meta charset="UTF-8">
    <title>Oneven</title>
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
    <li><a href="dobbel2.php">Dobbel 2</a></li>
    <li><a href="onzegroep2.php">Onzegroep 2</a></li>-->
    <li><a href="eredivisie2.php">Eredivisie 2</a></li>
    <li><a href="lab04.php">Lab 04</a></li>
    <!--<<li><a href="lab05.php">Lab 05</a></li>
    <li><a href="lab06.php">Lab 06</a></li>
    <li><a href="lab07.php">Lab 07</a></li>
    <li><a href="lab08.php">Lab 08</a></li>-->




</ul>

<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 9-3-2018
 * Time: 10:16
 */

$x=1;
while ($x<=100)
{
    if (($x % 2)==0)
    {
        $x++;
        continue;
    }
    else
    {
        echo $x.'<br />';
        $x++;
    }
}
?>
</body>
</html>
