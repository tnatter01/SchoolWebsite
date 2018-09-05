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

    <div class="opdracht">



        <button type="button" onclick='window.location.reload(true);'>Nieuwe kaart</button>

        <p>

            <?php

            $kleuren = array("ruiten", "harten", "klaveren", "schoppen");

            $waarden = array("boer", "vrouw", "heer", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

            $randomkleur = (rand(0, 3));

            $randomwaarde = (rand(0, 11));

            ?>

            <?php echo $kleuren[$randomkleur];?><br>

            <?php echo $waarden[$randomwaarde];?><br>



            <?php

            $image = $kleuren[$randomkleur] . "_" . $waarden[$randomwaarde] . ".svg";?><br>

            <?php

            echo "<img src=../kaarten/".$image.">";

            ?>

        </p>









    </div>


</div>
<?php include '../sidebar.php'; ?>
</body>

</html>