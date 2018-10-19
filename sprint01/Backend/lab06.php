<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 19-10-2018
 * Time: 09:27:46
 */
$brief="
Beste <b><<abonnee>></b><br>
U heeft het laatste nummer van ons magazine ontvangen.<br>
Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekkelijke en exclusieve korting: <br>
U betaalt <b><<korting>></b> in plaats van 65 euro. <br><br>
<i>Profiteer nu van deze aanbieding!</i><br><br>
Met vriendelijke groet,
<br>Sam Simons
<br>Hoofdredacteur
";

$brief = str_replace("<<abonnee>>", "Jan Davids", $brief);
$brief = str_replace("<<korting>>", "50", $brief);
echo $brief;

?>