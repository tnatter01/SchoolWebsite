




<!DOCTYPE html>

<html lang="en">
<head>
    <title id="title">This is replaced by the filename</title>
    <script type="text/javascript">
        var url = window.location.pathname; // gets the pathname of the file
        var str = url.substring(url.lastIndexOf('/')+1); // removes everything before the filename
        var filename = str.replace(/%20/g, " "); // if the filename has multiple words separated by spaces, browsers do not like that and replace each space with a %20. This replace %20 with a space.
        document.getElementById("title").innerHTML = filename;
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
</head>
<body>



<div class="main">
<?php
//superglobale scope
$GLOBALS["url"] = "www.mijndomeinnaam.nl";
//globale scope
global $email;
$email = "webmaster@mijndomeinnaam.nl";
//globale contstanten
define("BIJDRAGE", 0.10);
function doneren($bedrag)
{
    //function scope
    $melding = "GIRO 555";
    echo "<br>" . $melding;
    echo "<br>URL: " . $GLOBALS["url"];
    echo "<br>Bedrag: " .$bedrag;
    global $email;
    echo "<br>E-mail:" . $email;
    $bijdrage = $bedrag * BIJDRAGE;
    $donatie = $bedrag + $bijdrage;
    echo "<br>Inclusief bijdrage: $donatie";
    static $pot;
    $pot = $pot + $donatie;
    echo "<br><span style='background-color: yellow'>Totaal bedrag in pot $pot</span><br>";
}
doneren(100);
doneren(1000);
doneren(33333);
?>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>


