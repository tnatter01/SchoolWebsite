


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
    <form method="post">
        <input type="date" name="1">
        <input type="date" name="2">
        <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST["submit"])){


        $datum1 = strtotime($_POST["1"]);
        $datum2 = strtotime($_POST["2"]);
        $verschil = ceil(abs($datum2 - $datum1) / 86400);
        echo "Het verschil is $verschil dag(en).";
    }
    ?>
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>