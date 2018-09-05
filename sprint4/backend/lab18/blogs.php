<title>blogs.php</title>
<h2>Welkom op de blog!</h2>
<br>
<?php
function myFunction() {
    $fh = fopen( 'filelist.txt', 'w' );
    fclose($fh);
    header("Location:blogs.html");
    exit;
}

if(isset($_POST['bericht']) || isset($_POST['skip'])) {
    $str = $_POST['naam'] . ' zei het volgende om ' . $_POST['datum'] . "<br>" . $_POST['bericht'] . "<br> \r\n";

    $path = 'blogs.txt';
    $fh = fopen($path,"a+");
    fwrite($fh,$str); // Write information to the file

    $handle = fopen($path, "r");
    $contents = fread($handle, filesize($path)); // Read entire file
    echo $contents;
    fclose($fh);
} else {
    echo "Sorry, wij hebben geen blogs gevonden. <br>";
}
?>
<br>
<input type="button" onclick="myFunction()" value="Reset blog"/>
<input type="button" onClick="window.location.href='blogs.html';" value="Terug"/>
