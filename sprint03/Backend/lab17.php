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
    <link rel="stylesheet" href="../style/style.css">
    <style>
        input{
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            width: 70%;
            margin-bottom: 10px;
        }
        input[type=submit]{
            background-image: linear-gradient(red, greenyellow);
        }
        form{
            border-radius: 25px;
            background: #73AD21;
            padding: 20px;
            width: 20%;
            background-image: linear-gradient(red, greenyellow);
        }
    </style>
</head>
<body>



<div class="main">
    <form name="login" action="" method="post">
        <input type="text" name="voornaam" placeholder="Voornaam" /> <br>
        <input type="text" name="achternaam" placeholder="Achternaam" /><br>
        <input type="date" name="geboortedatum" placeholder="Geboortedatum" /><br>
        <input type="text" name="adres" placeholder="Adres" /><br>
        <input type="text" name="postcode" placeholder="Postcode" /><br>
        <input type="text" name="plaats" placeholder="Plaats" /><br>
        <input type="text" name="email" placeholder="E-mailadres" /><br>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord" /><br>
        Minderjarig: <select>
            <option name="minderjarig" value="ja">Ja</option>
            <option name="minderjarig" value="nee">Nee</option>
        </select>
        <input type="submit" name="submit" value="Inloggen" />
    </form>

</div>



<?php include '../sidebar.php'; ?>
</body>

</html>


