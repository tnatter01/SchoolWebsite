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
<body onload="alertfunction()">


</div>

<div class="main">
    <script>
        function alertfunction() {
            alert("Welkom op mijn website:\n " +
                "Dit is mijn eerste Javascript:\n" +
                "Enkele onderwerpen die ik ga behandelen zijn: \n" +
                "\t*Alert \n" +
                "\t*console \n" +
                "\t*write \n" +
                "\t*confirm \n" +
                "\t*prompt \n" +
                "\t*variabelen \n" +
                "\t*En operatoren \n" +
                "Ik wens je veel plezier op mijn website!"
            );
        }
    </script>
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>