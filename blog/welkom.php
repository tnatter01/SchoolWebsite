<?php
session_start();
$mijnSession = session_id();

$bestand = fopen("gebruikers.txt","r");
$account = fgets($bestand);
$account = explode("*", $account);
$profielFoto = "uploads/$account[3]";

$naam = $_SESSION["NAME"];
$status = $_SESSION['STATUS'];

if(isset($_SESSION['ID']) && $_SESSION['ID']===$mijnSession){
    echo "<h3>Welkom $naam</h3><br>";
    echo "<img src=$profielFoto length=50px width=50px>";
}else{
    echo "<br>Je moet eerst inloggen!<br>";

}
?>
<a href='uitloggen.php'><input type='button'
name='terug' value=' Uitloggen '/>
</a>
