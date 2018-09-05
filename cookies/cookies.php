/*
<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 19-3-2018
 * Time: 13:22
 */
ob_start();
setcookie("gebruiker", "sanskrit", mktime(0,0,0,1,1,2050));
$gebruiker = $_COOKIE["gebruiker"];
echo "<br> Gebruikersnaam is: $gebruiker";
print_r($_COOKIE);
ob_end_flush();

setcookie("user", "", time()-3600);
if(isset($_COOKIE["user"])){
    echo $_COOKIE["user"];
}else{
    echo "Cookie is verwijderd";
}
?>*/
<br>
<br>
<br>
<?php
/* These are our valid username and passwords */
$user = 'jonny4';
$pass = 'delafoo';

if (isset($_POST['username']) && isset($_POST['password'])) {

    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {

        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'www.example.com');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'www.example.com');

        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username']);
            setcookie('password', md5($_POST['password']));
        }
        header('Location: index.php');

    } else {
        echo 'Username/Password Invalid';
    }

} else {
    echo 'You must supply a username and password.';
}
?>
