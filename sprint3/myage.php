<?php
//Formatteren
$format = '%A %d %B %Y %H:%M:%S';

//lokale datum instelling
setlocale(LC_TIME, "nld_NLD");
$ned = strftime($format);
echo "<br>Vandaag met tijd: " . $ned;

//date_diff
$geboortedatum = date_create("18-04-2001");
echo "<br>Geboortedatum: " . date_format($geboortedatum, "d-m-Y");
$vandaag = date_create("now");
echo "<br>Vandaag: " . date_format($vandaag, "d-m-Y");

$vandaagDateTime = new DateTime("now");
$timestamp = $vandaagDateTime->getTimestamp();

$interval = date_diff($geboortedatum, $vandaag);
$seconden = (new DateTime())->setTimeStamp(0)->add($interval)->getTimeStamp();
$minuten = round($seconden/60);
$uren = round($minuten/60);
$dagen = round($uren/24);
$weken = round($dagen/7);
$maanden = round($weken/4.32);
?>
<div style="
    border-style: solid;
    border-width: 5px;
    border-color: red;
    border-radius: 25px;
    background: #ffff4d;
    padding: 20;
    width: 300px;
    height: 300px;
    font-family: Palatino Linotype, Book Antiqua, Palatino, serif ;
    font-size: 18pt;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;">
    <?php
    echo "<br>U leeft al: " . $maanden . " maanden, of";
    echo "<br>" . $weken . " weken, of";
    echo "<br>" . $dagen . " dagen, of";
    echo "<br>" . $uren . " uren, of";
    echo "<br>" . $minuten . " minuten, of";
    echo "<br>" . $seconden . " seconden.";
    ?>
</div>
