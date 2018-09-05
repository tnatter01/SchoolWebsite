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

    <button onclick="myFunction()">Voer Code in</button>
    <h1 style="font-family: 'Mina', sans-serif;">Kies een nummer onder de 10!</h1>
    <p style="font-family: 'Mina', sans-serif;" id="demo"></p>

    <script>
        function myFunction() {
            var code = prompt("Please enter your code", "Uw Code");
            var randomNumber = Math.floor((Math.random() * 10) + 1);
            if (code == randomNumber) {
                document.getElementById("demo").innerHTML =
                    "<h2>Gefeliciteerd je getal is hetzelfde als het random getal!</h2>";
            }
            else {
                document.getElementById("demo").innerHTML =
                    "<h2>Jammer, volgende keer beter</h2>";
            }
        }
    </script>

</div>
<?php include '../sidebar.php'; ?>
</body>

</html>