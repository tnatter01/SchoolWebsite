<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 53-4-2018
 * Time: 11:53
 */

$link = mysqli_connect("fdb19.awardspace.net", "2664816_schiphol", "5E62reWK", "2664816_schiphol", "3306");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$klacht = mysqli_real_escape_string($link, $_REQUEST['Klacht']);
$naam = mysqli_real_escape_string($link, $_REQUEST['Naam']);
$email =mysqli_real_escape_string($link, $_REQUEST['Email']);
$telefoon = mysqli_real_escape_string($link, $_REQUEST['Telefoon']);
$postcode = mysqli_real_escape_string($link, $_REQUEST['Postcode']);
$soort = mysqli_real_escape_string($link, $_REQUEST['Soort']);
$datum = date("Y-m-d");
$tijd = date("H:i");


function PostcodeCheck($postcode)
{
    $remove = str_replace(" ","", $postcode);
    $upper = strtoupper($remove);

    if( preg_match("/^\W*[1-9]{1}[0-9]{3}\W*[a-zA-Z]{2}\W*$/",  $upper)) {
        return $upper;
    }
}

PostcodeCheck($postcode);


if($postcode == "1098LV" || $postcode == "1098XX" || $postcode == "1098LX" || $postcode == "1099TT" || $postcode == "1999BB" || $postcode == "2000AA"){
    $sql = "INSERT INTO klachtenformulier (klacht, naam, email, telefoon, postcode, soort, datum, tijd) VALUES ('$klacht', '$naam', '$email', '$telefoon', '$postcode', '$soort', '$datum', '$tijd')";
}
else{
    echo "<script>";
    echo "alert('Je hebt geen geldige postcode om een klacht in te mogen dienen.');";
    echo "</script>";
    return;
}

if(mysqli_query($link, $sql)){
    echo "<script>";
    echo "alert('Bedankt voor het invullen van het klachtenformulier!');";
    echo "</script>";
    echo "<script type='text/javascript'>location.href = '/schiphol/klachtenoverzicht.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>


