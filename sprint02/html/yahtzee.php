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

    <button type="button" name="button" onclick="gooi()">Gooi</button><br>
    <p style="display:inline-block;" id="0"></p>
    <p style="display:inline-block;" id="1"></p>
    <p style="display:inline-block;" id="2"></p>
    <p style="display:inline-block;" id="3"></p>
    <p style="display:inline-block;" id="4"></p>
    <br>
    <a id="totaal"></a>
    <script type="text/javascript">
        function gooi() {
            var nummer = new Array();
            for (var i = 0; i < 5; i++) {
                nummer.push(Math.floor(Math.random() * 5) + 1);
            }
            for (var i = 0; i < nummer.length; i++) {
                document.getElementById(i).innerHTML = "<img style='width: 200px; height: 200px;' src='../images/nummer" + nummer[i] + ".png'>";
            }
            document.getElementById("totaal").innerHTML = nummer[0] + nummer[1] + nummer[2] + nummer[3] + nummer[4];
        }
    </script>

</div>
<?php include '../sidebar.php'; ?>
</body>

</html>