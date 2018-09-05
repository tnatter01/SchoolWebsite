<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Cookies</title>
    </head>
    <body>
    <form name="login"
            action=""
            method="POST"
            onsubmit="storeValues(this)"
    >
        Gebruikersnaam:<br>
        <input type="text" name="user" id="gebruikersnaam"/><br><br>
        <input type="button" name="submit" value="inloggen" onclick="welkom()">
    </form>
    </body>
    <?php
    function welkom()
    {
        echo "test";
        $gebruiker = $_COOKIE["gebruikersnaam"];
        if (isset($_COOKIE["gebruikersnaam"])) {
            echo "Hallo " + $_COOKIE["gebruikersnaam"] + ", welkom terug.";
        } else {
            setCookie("gebruikersnaam", form.gebruikersnaam.value, mktime(0,0,0,1,1,2050));
        }
    }
    ?>
</html>