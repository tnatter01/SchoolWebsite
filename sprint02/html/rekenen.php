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


</div>

<div class="main">

    <br>
    <center><h1 style="font-family: 'Roboto', sans-serif;">Rekenen</h1>
        <p style="font-family: 'Roboto', sans-serif;">Voer een getal en keuze in <i>( Plus , Min, Maal, Delen )</i></p></center>
    <br>
    <br>
    <div class="row">
        <div class="col-sm">
            <div class="input-group mb-3">
                <input id="getal1" type="text" class="form-control" placeholder="Eerste Getal [getal1]">
            </div>
        </div>
        <div class="col-sm">
            <div class="input-group mb-3">
                <input id="string" type="text" class="form-control" placeholder="Voer hier plus, min, maal of delen in! [string]">
            </div>
        </div>
        <div class="col-sm">
            <div class="input-group mb-3">
                <input id="getal2" type="text" class="form-control" placeholder="Tweede Getal [getal2]">
            </div>
        </div>
    </div>
    <br>
    <center><button id="knop" type="submit" class="btn btn-success" onclick="Rekenen()">Bereken</button></center>
    <br>
    <p id="antwoord"></p>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script>
    function Rekenen() {
        var uitkomst = "TEST";

        var getal1 = document.getElementById("getal1").value;
        var getal2 = document.getElementById("getal2").value;
        var string = document.getElementById("string").value;

        if (string === "plus") {
            var nummer1 = parseInt(getal1);
            var nummer2 = parseInt(getal2);

            uitkomst = nummer1 + nummer2;
            document.getElementById("antwoord").innerHTML =
                uitkomst;
        }
        else if (string === "min") {
            uitkomst = getal1 - getal2;
            document.getElementById("antwoord").innerHTML =
                uitkomst;
        }
        else if (string === "maal") {
            uitkomst = getal1 * getal2;
            document.getElementById("antwoord").innerHTML =
                uitkomst;
        }
        else if (string === "delen") {
            uitkomst = getal1 / getal2;
            document.getElementById("antwoord").innerHTML =
                uitkomst;
        } else {
            document.getElementById("antwoord").innerHTML =
                'U heeft het nog niet goed ingevuld.';
        }
    }



    $(document).ready(function(){
        $('#getal2').keypress(function(e){
            if(e.keyCode==13)
                $('#knop').click();
        });
    });

</script>

</div>
<?php include '../sidebar.php'; ?>
</body>

</html>