<?php
// Vind de sessie
session_start();
// Eind sessie melden.
if (isset($_SESSION['USER'])) {
    echo "Tot ziens " . $_SESSION['USER'] . "<br>";
} else {
    echo "Tot ziens! <br>";
}
//Verwijder de sessie.
session_destroy();
?>
<a href="inloggen.html">
    <input type="button" value="Inloggen">
</a>