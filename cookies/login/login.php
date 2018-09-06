

<form method="post">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="checkbox" name="rememberme" value="rememberme">Onthoud mij<br>
        <input type="submit" name="login" value="Login">
    </form>


<?php
$username = array("tnatter01@student.rocvantwente.nl","nklaassen01@student.rocvantwente.nl","eekmekci01@student.rocvantwente.nl","ddejonge05@student.rocvantwente.nl");
$password = "Welkom12345!";


    if (isset($_POST['username']) && isset($_POST['password'])) {

        if(in_array($_POST['username'], $username)){
            if ($_POST['password'] == $password){
                if (isset($_POST['rememberme'])) {
                    setcookie('username', $_POST['username'], time()+60*60*24, '/account', 'www.example.com');
                    setcookie('password', $_POST['password'], time()+60*60*24, '/account', 'www.example.com');
                } else {
                /* Cookie expires when browser closes */
                setcookie('username', $_POST['username']);
                setcookie('password', md5($_POST['password']));
            }
                echo '<script language="javascript">';
                echo 'alert("Ingelogd!")';
                echo '</script>';
            }
        }else{
            echo 'Gebruikersnaam bestaat niet.';
        }
    } else {
        echo 'You must supply a username and password.';
    }
?>