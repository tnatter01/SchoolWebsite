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
<form name="login" action="" method="post">
    Gebruikersnaam:<br>
    <input type="text" name="user" /><br><br>
    <input type="submit" name="submit" value="Inloggen" />
</form>

    <?php
    error_reporting(0);

    if(isset($_POST["submit"])){
        $user = $_POST["user"];

        if($_COOKIE["$user"]){
            echo "<script>alert('Hallo $user, welkom terug.');</script>";
        } else{
            setcookie("$user" , $user, time()+ 3600);
            echo "<script>alert('Hallo $user, u bent onze nieuwste gebruiker.');</script>";
        }
    }
    ?>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>


