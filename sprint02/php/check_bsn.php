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

    <form action=""
          method="POST"
          name="bsn">


        <input type="text" name="BSN" placeholder="BSN" maxlength="9">
        <input type="submit" name="Verzenden">

    </form>

    <?php

    if(isset($_POST['Verzenden'])) {

        $bsn = $_POST["BSN"];

        if (is_numeric($bsn)) {
            if (strlen($bsn) == 9) {
                $bsn_array  = str_split ($bsn);
                $elfproef = ($bsn_array[0] * 9 + $bsn_array[1] * 8 + $bsn_array[2] * 7 + $bsn_array[3] * 6 + $bsn_array[4] * 5 + $bsn_array[5] * 4 + $bsn_array[6] * 3 + $bsn_array[7] * 2 + $bsn_array[8] * -1) / 11;
                if (is_int ($elfproef)) {
                    echo "Jij hebt een correcte BSN ingevuld.";
                } else {
                    echo "Jouw ingevulde BSN nummer is niet correct, omdat de elfproef niet is geslaagd.";
                }
            } else {
                echo "Jouw ingevulde BSN nummer is niet correct, omdat het niet 9 cijfers lang is.";
            }
        } else {
            echo "Jouw ingevulde BSN nummer is niet correct, omdat het niet alleen uit cijfers bestaat.";
        }
    }
    ?>

</div>
<?php include '../sidebar.php'; ?>
</body>

</html>