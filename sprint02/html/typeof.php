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

    <h3>Druk op F12 om in de console te kijken!</h3>
    <script>
        var x = true;
        var y = 15;
        var z = "Hallo Wereld";
        console.log(
            " Het type van x is: " + typeof x + '\n',
            "Het type van y is: " + typeof y + '\n',
            "Het type van z is: " + typeof z
        );
    </script>

</div>
<?php include '../sidebar.php'; ?>
</body>

</html>