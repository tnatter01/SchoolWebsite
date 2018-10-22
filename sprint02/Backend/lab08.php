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
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <form name="order" action="" method="post">
        <tr>
            <td>
                <img src="../images/evora.jpg" width="100px" alt="X" />
            </td>
        </tr>
        <tr>
            <td>
                Cesaria Evora "Em Um Concerto" Tracks:10 Prijs: 9.99
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="albumcode[0]" value="001" />
                <input type="hidden" name="artiest[0]" value="Cesaria Evora" />
                <input type="hidden" name="titel[0]" value="Em Um Concerto" />
                <input type="hidden" name="tracks[0]" value="10" />
                <input type="hidden" name="prijs[0]" value="9.99" />
                <input type="hidden" name="genre[0]" value="World" />

                Aantal: <input type="text" size="2" maxlength="3" name="aantal" value="0"
                               style="background-color:#f8ce6c;" />
                <hr />
            </td>
        </tr>
        <tr>
            <td>Korting: <br />
            <input type="checkbox" name="student" value="15" />Student 15% <br />
            <input type="checkbox" name="senior" value="10" />Senior 10% <br />
            <input type="checkbox" name="klant" value="5" />Klant 5% <br />
            <hr />
            </td>
        </tr>
        <tr>
            <td>Selecteer een betalingswijze: <br />
                <select name="betalingswijze">
                    <option value="Visa">Visa</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Ideal">Ideal</option>
                </select>
                <hr />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" width="300px" name="submit" value="    Bestellen      " />
                <hr />
            </td>
        </tr>
    <?php
    if(isset($_POST['aantal'])){
        $aantal = $_POST['aantal'];
            echo "Aantal: $aantal";
    }
    echo '<br>';
    if(isset($_POST['betalingswijze'])){
        $betalingswijze = $_POST['betalingswijze'];
        echo "Betalingswijze: $betalingswijze";
    }

    ?>
    </form>
</table>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>
