<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 19-10-2018
 * Time: 09:21:44
 */

if(isset($_POST["submit"])){
    $achternaam = $_POST['achternaam'];
    $voornaam = $_POST['voornaam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $email = $_POST['email'];
    $opleiding = $_POST['opleiding'];

    echo "<h2>Uw gegevens zijn </h2><br>
<br>Achternaam: $achternaam
<br>Voornaam: $voornaam
<br>Adres: $adres
<br>Postcode: $postcode
<br>Plaats: $plaats
<br>E-mailadres: $email
<br> <br>
U wordt ingeschreven voor de volgende opleiding: $opleiding
";
}