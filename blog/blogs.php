<?php
if(isset($_POST["submit"])){
    $fotoNaam = basename($_FILES["foto"]["name"]);
    global $uploadsMap;
    function upload(){
        global $uploadsMap;
        $uploadsMap = "uploads/blog/";
        $uploadsMap = $uploadsMap . basename($_FILES["foto"]["name"]);
        $fotoType = pathinfo($uploadsMap,PATHINFO_EXTENSION);

        //controleer of deze foto al bestaat

        if (file_exists($uploadsMap)) {
            echo "Deze foto bestaat al.";
            return false;
        }

        // valideer fotoSize

        if ($_FILES["foto"]["size"] > 500000){
            echo "Deze foto is te groot.";
            return false;
        }

        // valideer formaat
        if($fotoType != "jpg" &&
            $fotoType != "png" &&
            $fotoType != "jpeg" &&
            $fotoType != "gif") {
            echo "Foto moet JPG, JPEG, PNG OF GIF zijn.";
            return false;
        }
        return true;
    }

    //verplaats foto van temp-map naar uploadsMap
    if (upload()) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"],
            $uploadsMap)){
            echo "Foto is geüpload.";

            //gebruiker opslaan
            $bestand=fopen("blogs.txt", "ab");
            if (!$bestand){
                echo "Kon geen bestand openen!";
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
                echo "Account is aangemaakt";
            }else{
                echo "Kon bestand niet afsluiten";
            }
        } else{
            echo "Probleem bij het uploaden. Foto niet geüpload.";
        }
    }
}
?>
<a href="aanmelden.html">
    <input type="button" name="terug" value=" Terug "/>
</a>
