

<html lang="en">
<head>
    <title id="title">Login pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="main">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Gebruikersnaam:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Wachtwoord:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Onthoud mij</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Inloggen">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    /**
     * Created by PhpStorm.
     * User: Twan
     * Date: 11-9-2018
     * Time: 13:40
     */
    $gebruikers = array
    (
        "tnatter01@student.rocvantwente.nl",
        "ddejonge05@student.rocvantwente.nl",
        "eekmekci01@student.rocvantwente.nl",
        "lpeperkamp01@student.rocvantwente.nl",
        "mpattipeilohy01@student.rocvantwente.nl",
        "nklaassen03@student.rocvantwente.nl",
        "trietkerk01@student.rocvantwente.nl"
    );
    if(isset($_POST["submit"])) {
        $gebruikersnaam = $_POST["username"];
        $wachtwoord = $_POST["password"];

        if(in_array($gebruikersnaam, $gebruikers)){
            if($wachtwoord === "Welkom12345!"){
                if(isset($_POST["remember-me"])){
                    setcookie("username", $gebruikersnaam, time() + (86400 * 30), "/");
                    header("Location: http://groep8.dx.am/");
                } else{
                    header("Location: http://groep8.dx.am/");
                }

            }else{
                echo "Wachtwoord onjuist!";
            }
        } else{
            echo "Gebruikersnaam onbekend!";
        }
    }
    ?>
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>
