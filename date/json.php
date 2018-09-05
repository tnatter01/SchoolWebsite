<?php
$user = array(
    "naam" => "Shyam",
    "email" => "shyan@nu.nl",
    "wachtwoord" => "",
    "photo" => "shyam.jpg"
);
echo "<br>userArray: <br>";
var_dump($user, true);
$userJsonString = json_encode($user);
echo "<br>userJsonLitral: <br>" . $userJsonString;


$boekenJsonLiteral = '[
{"titel":"Stoner","auteur":"John Williams",
"genre":"fictie","prijs":19.99},
{"titel":"De cirkel","auteur":"Dave Eggers",
"genre":"fictie","prijs":22.5},
{"titel":"Rayuela","auteur":"Julio Cortazar",
"genre":"fictie","prijs":25.5}]';

$boeken = json_decode($boekenJsonLiteral, true);

foreach($boeken as $boek){
    echo "<br>titel: ".$boek["titel"];
    echo "<br>auteur: ".$boek["auteur"];
    echo "<br>genre: ".$boek["genre"];
    echo "<br>prijs: ".$boek["prijs"];

}
?>