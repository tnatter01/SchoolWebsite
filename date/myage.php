<style>
    .opdracht{
        border: 5px solid red;
        padding: 10px;
        border-radius: 25px;
        display: inline-block;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 200px;
        height: 100px;
        margin: auto;
        background-color: #f3f117;
        font-family: "Palatino Linotype";
        font-family: "Book Antiqua";
        font-family: Serif;
        font-size: 18px;
    }
</style>

<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 20-3-2018
 * Time: 09:23
 */

$verjaardag = new DateTime("2001-04-18");
$vandaag = new DateTime("now");
$interval = date_diff($vandaag, $verjaardag);


echo "<div class='opdracht'>";
echo $interval->format("Je bent  %Y jaren, %M maanden, %d dagen, %H uren, %i minuten en %s seconden oud.");
echo "</div>";
?>
