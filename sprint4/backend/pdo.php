<!DOCTYPE html>

<html lang="en">
<head>
    <title>Pdo.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .btn {
            background: #3498db;
            background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
            background-image: -moz-linear-gradient(top, #3498db, #2980b9);
            background-image: -ms-linear-gradient(top, #3498db, #2980b9);
            background-image: -o-linear-gradient(top, #3498db, #2980b9);
            background-image: linear-gradient(to bottom, #3498db, #2980b9);
            -webkit-border-radius: 28;
            -moz-border-radius: 28;
            border-radius: 28px;
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
        }

        .btn:hover {
            background: #3cb0fd;
            background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
            background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
            text-decoration: none;
        }
        img {
            transition:transform 0.25s ease;
            height:300px;
            width:750px;
        }

        img:hover {
            -webkit-transform:scale(2); /* or some other value */
            transform:scale(2);
        }
        .wraptocenter {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
        .wraptocenter * {
            vertical-align: middle;
        }
        .wraptocenter {
            display: block;
        }
        .wraptocenter span {
            display: inline-block;
            height: 100%;
            width: 1px;
        }
    </style>
    <style>
        .wraptocenter span {
            display: inline-block;
            height: 100%;
        }
    </style>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #af2739;
            background: linear-gradient(#581809, #af2739);
            overflow-x: hidden;
            padding-top: 20px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #ffffff;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
            color: #929292;
        }

        /* Main content */
        .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: #80150a;
            color: #000cff;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #af2739;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        p{
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="sidenav">

    <a href="/sprint4/rekenen/rekenen.html">Rekenen</a>

    <button class="dropdown-btn">Algoritme
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint4/isee/boete.html">Boete</a>
        <a href="/sprint4/isee/onweer.html">Onweer</a>
        <a href="/sprint4/isee/boete.html">Schrikkeljaar</a>

    </div>

    <button class="dropdown-btn">Backend
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint4/backend/lab18/blogs.html">lab18</a>
        <a href="/sprint4/backend/pdo.php">pdo.php</a>
    </div>

    <button class="dropdown-btn">Database
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint4/database/klantgegevens.html">Klantentabel</a>
        <a href="#">Contactmomenten</a>
    </div>

    <a href="http://i7ao1.dx.am/labradoodle/index.html">Frontend</a>

    <a href="http://i7ao1.dx.am/home.html">Project Schiphol</a>


</div>


<div class="main">
    <div >
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta http-equiv="content-type"
                  content="text/html"
                  charset="UTF-8">
        </head>
        <body>
        <?php
        echo "<br>---- Opgave 96: Drivers: ";
        print_r(PDO::getAvailableDrivers());

        echo "<br />---- Opgave 97: PDO verbinding maken.";
        $dbhost = "localhost";
        $dbname = "id4495346_db";
        $user = "id4495346_admin" ;
        $pass = "ketamine";

        try {
            $database = new
            PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
            $database->setAttribute
            (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "<br />Verbinding gemaakt";
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            echo "<br />Verbinding NIET gemaakt";
        }

        echo "<br />-Opgave 98:Input data vanuit geïndexeerde array";
        $query = "INSERT INTO album(titel, artiest, genre, prijs, voorraad) values (?,?,?,?,?)";
        $insert = $database->prepare($query);
        $data = array("Stairway to Heaven","Led Zeppelin","Rock","0.99","200");

        try{
            $insert->execute($data);
            echo "<script>alert('Album toegevoegd.');</script>";
        }
        catch (PDOException $e){
            echo "<script>alert('Album NIET toegevoegd.');</script>";
        }

        echo "<br />-Opgave 99: zelfde insert-query met new data";
        $data = array("The Wall","Pink Floyd","Rock","0.99","100");

        try{
            $insert->execute($data);
            echo "<script>alert('Album toegevoegd.');</script>";
        }
        catch (PDOException $e){
            echo "<script>alert('Album NIET toegevoegd.');</script>";
        }

        echo "<br />-Opgave 100: verwijder toegevoegd album";
        $query = "DELETE FROM album WHERE titel = 'The Wall'";
        $delete = $database->prepare($query);
        try{
            $delete->execute();
            echo "<script>alert('Album verwijderd');</script>";
        }
        catch (PDOException $e){
            echo "<script>alert('Album NIET verwijderd.');</script>";
        }

        echo "<br />-Opgave 101: verwijder toegevoegd album";
        $query = "DELETE FROM album WHERE titel = 'Stairway to Heaven'";
        $delete = $database->prepare($query);
        try{
            $delete->execute();
            echo "<script>alert('Album verwijderd');</script>";
        }
        catch (PDOException $e){
            echo "<script>alert('Album NIET verwijderd.');</script>";
        }

        echo "<br />---- Opgave 102: Alle albums selecteren";
        $query = "SELECT * FROM album WHERE 1";
        $albums  = $database->prepare($query);
        try{
            $albums->execute(array());
            $albums->setFetchMode(PDO::FETCH_ASSOC);
            foreach($albums as $album){
                echo "<br />".$album["titel"];
            }
        }
        catch (PDOException $e){
            echo "<script>alert('Geen albums gevonden.');</script>";
        }

        echo "<br />---- Opgave 103: Input-data vanuti hash-array";
        $query = "INSERT INTO album(titel, artiest, genre, prijs, voorraad)
values(:titel, :artiest, :genre, :prijs, :voorraad)";
        $insert = $database->prepare($query);
        $data = array("titel" => "Let's get it on", "artiest" => "Marvin Gaye", "genre"
        => "soul", "prijs" => "0.99", "voorraad" => "44");
        try{
            $insert->execute($data);
            echo "<script>alert('Album toegevoegd.');</script>";
        }
        catch (PDOException $e) {
            echo "<script>alert('Album NIET toegevoegd.');</script>";
        }

        echo "<br />---- Opgave 104: Zoek album";
        $query = "SELECT titel FROM album WHERE titel = :albumtitel";
        $albums = $database->prepare($query);
        try{
            $albums->execute(array("albumtitel" => "Let's Get It On"));
            $albums->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($albums as $album) {
                echo "<br />".$album["titel"];
            }
        }
        catch (PDOException $e){
            echo "<script>alert('Album NIET gevonden.');</script>";
        }

        echo "<br />---- Opgave 105: update prijs";
        $query = "UPDATE album SET prijs = ? WHERE titel = ?";
        $update = $database->prepare($query);
        $albumtitel = "Let's Get It On";
        $prijs = 0.99;
        $update->execute(array($prijs, $albumtitel));

        if ($update){
            echo "<br /> De prijs is gewijzigd.";
        }

        echo "<br />---- Opgave 106: Zoek album";
        $query = "SELECT titel, prijs FROM album WHERE 
titel = 'Let\'s Get It On' ";
        $albums = $database->prepare($query);
        $albums->execute(array());
        $albums->setFetchMode(PDO::FETCH_ASSOC);
        if ($albums){
            echo "<script>alert('Album gevonden.');</script>";
            foreach ($albums as $album) {
                echo "<br />".$album["titel"] .
                    " Prijs: " .$album["prijs"];

            }
        }

        echo "<br />---- Opgave 107: zoek hoogste bestelling";
        $query = "SELECT MAX(voorraad) as MAX FROM album";
        $max = $database->prepare($query);
        $max->execute();
        $maxAantal = $max->fetch(PDO::FETCH_ASSOC);
        echo "<br />Max aantal: " .$maxAantal["MAX"];

        echo "<br />---- Opgave 108: verbinding verbreken";
        $query = "DELETE FROM album WHERE titel = 'Let\'s Get it on'";
        $delete = $database->prepare($query);
        try{
            $delete->execute();
            echo "<script>alert('Album verwijderd.');</script>";
        }
        catch(PDOException $e) {
            echo "<script>alert('Album NIET verwijderd.');</script>";
        }

        $database = null;
        echo "<script>alert('Verbinding beëindigd.');</script>";
        ?>


        </body>
        </html>
    </div>
</div>


<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
</body>

</html>