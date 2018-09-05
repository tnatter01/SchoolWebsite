<?php
echo "<h2>Lab 15</h2>";
$format = '%d %B %Y';
setlocale(LC_TIME, "nld_NLD");
$ned= strftime($format);
echo "<br>Vandaag is: ".$ned;
$kerst = date_create("2018-12-25");
$vandaag = new DateTime("now");
$verschil = date_diff($vandaag, $kerst);
echo "<br>U heeft nog: " .$verschil->format("%R%a dagen tot kerst.");

?>