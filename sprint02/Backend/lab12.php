


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
echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
$saldo = 100;
$rente = 0.1;
$maand = 1;
echo "<br>Beginsaldo is: $saldo";
echo "<br>START...";
do{
    if($maand == 2){
        echo "<br>Februari telt niet mee";
        continue;
    }
    if($maand = 6){
        if($saldo <= 1000){
            echo "Je saldo is te laag.";
            break;
        }
    }
    $saldo = $saldo + ($saldo * $rente);
    $saldo = sprintf("%0.2f", $saldo);
    echo "Maand: $maand je saldo is $saldo";
    $maand++;

} while($saldo < 2000);
    echo "<br>FINISH!";

?>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>

