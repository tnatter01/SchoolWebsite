<title>aanmelden.php</title>
<?php
if(isset($_POST["submit"])){
    $fotoNaam = basename($_FILES["foto"]["name"]);
    global $uploadsMap;
    function upload(){
        global $uploadsMap;
        $uploadsMap = "uploads/";
        $uploadsMap = $uploadsMap . basename($_FILES["foto"]["name"]);
        $fotoType = pathinfo($uploadsMap,PATHINFO_EXTENSION);

        //controleer of deze foto al bestaat

        if (file_exists($uploadsMap)) {
            echo "Deze foto bestaat al." . "<br>";
            return false;
        }

        // valideer fotoSize

        if ($_FILES["foto"]["size"] > 500000){
            echo "Deze foto is te groot." . "<br>";
            return false;
        }

        // valideer formaat
        if($fotoType != "jpg" &&
            $fotoType != "png" &&
            $fotoType != "jpeg" &&
            $fotoType != "gif") {
            echo "Foto moet JPG, JPEG, PNG OF GIF zijn." . "<br>";
            return false;
        }
        return true;
    }

    //verplaats foto van temp-map naar uploadsMap
    if (upload()) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"],
            $uploadsMap)){
            echo "<br>" . "Foto is geüpload." . "<br>";

            //gebruiker opslaan
            $bestand=fopen("gebruikers.txt", "ab");
            if (!$bestand){
                echo "Kon geen bestand openen!" . "<br>";
            }

            $naam = htmlspecialchars($_POST['naam']);
            $email = htmlspecialchars($_POST['email']);
            $wachtwoord = htmlspecialchars($_POST['password']);
            $profielFoto = $fotoNaam;

            $profiel =
                $naam . "*" .
                $email . "*" .
                $wachtwoord . "*" .
                $profielFoto."\n";

            fwrite($bestand,$profiel,strlen($profiel));

            if(fclose($bestand)){
                echo "Account is aangemaakt" . "<br>";
            }else{
                echo "Kon bestand niet afsluiten" . "<br>";
            }
        } else{
            echo "Probleem bij het uploaden. Foto niet geüpload." . "<br>";
        }
    }
}
?>
<a href="aanmelden.html"><input type="button" name="terug" value=" Terug ">
</a>
