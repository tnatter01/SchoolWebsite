<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 53-4-2018
 * Time: 11:53
 */

$link = mysqli_connect("fdb19.awardspace.net", "2664816_schiphol", "5E62reWK", "2664816_schiphol");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$klacht = mysqli_real_escape_string($link, $_REQUEST['Klacht']);
$naam = mysqli_real_escape_string($link, $_REQUEST['Naam']);
$email =mysqli_real_escape_string($link, $_REQUEST['Email']);
$telefoon = mysqli_real_escape_string($link, $_REQUEST['Telefoon']);
$postcode = mysqli_real_escape_string($link, $_REQUEST['Postcode']);
$postcode = $postcode = str_replace(' ', '', $postcode);
$postcode = strtoupper($postcode);
$soort = mysqli_real_escape_string($link, $_REQUEST['Soort']);
date_default_timezone_set("Europe/Amsterdam");

$datum = date("Y-m-d");
$tijd = date("H:i");




if($postcode == "1098LV" || $postcode == "1098XX" || $postcode == "1098LX" || $postcode == "1099TT" || $postcode == "1999BB" || $postcode == "2000AA"){
    $sql = "INSERT INTO klachtenformulier (klacht, naam, email, telefoon, postcode, soort, datum, tijd) VALUES ('$klacht', '$naam', '$email', '$telefoon', '$postcode', '$soort', '$datum', '$tijd')";
}
else{
    echo "<script>";
    echo "alert('Je hebt geen geldige postcode om een klacht in te mogen dienen.');";
    echo "</script>";
    echo "<script type='text/javascript'>location.href = '/klachten.php';</script>";
    return;
}

if(mysqli_query($link, $sql)){
    echo "<script>";
    echo "alert('Bedankt voor het invullen van het klachtenformulier!');";
    echo "</script>";
    echo "<script type='text/javascript'>location.href = '/overzicht.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>


