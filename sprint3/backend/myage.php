<!DOCTYPE html>
<html>
<head>
    <title>Groep8.sql</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .opdracht{
            border: 5px solid red;
            padding: 10px;
            border-radius: 25px;
            display: inline-block;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 200px;
            height: 100px;
            margin: auto;
            background-color: #f3f117;
            font-family: "Palatino Linotype";
            font-family: "Book Antiqua";
            font-family: Serif;
            font-size: 18px;
        }
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
            font-size: 15px;
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
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="sidenav">

    <button class="dropdown-btn">S2-DB-01 Select
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint3/database/groep8.html">groep8.sql</a>
        <a href="/sprint3/database/grolsch.html">grolsch.sql</a>
        <a href="#">Customer.sql</a>
        <a href="#">Bestelling.sql</a>
        <a href="#">Lab01.sql</a>
        <a href="#">Lab02.sql</a>
        <a href="#">Lab03.sql</a>
        <a href="#">Lab04.sql</a>
        <a href="#">Lab05.sql</a>
    </div>

    <button class="dropdown-btn">S2-DB-02 Interne Methodes
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Opdracht 1</a>
        <a href="#">Opdracht 2</a>
        <a href="#">Lab06.sql</a>
    </div>

    <a href="/sprint3/rekenen/rekenen.html">S2-REK-D2 procentuele afname en toename</a>

    <a href="#">S2-BE-07 Constanten en globale variabelen</a>

    <button class="dropdown-btn">S2-BE-08 Werken met datums
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint3/backend/lab15.php">Lab 15</a>
        <a href="/sprint3/backend/myage.php">myage.php</a>
        <a href="/sprint3/backend/datediff.php">datediff.php</a>
    </div>

    <button class="dropdown-btn">S2-BE-09 Cookies
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint3/backend/lab16.php">Lab 16</a>
        <a href="/sprint3/backend/opdracht1.php">Opdracht 1</a>
    </div>

    <a href="/sprint3/backend/lab17.php">S2-BE-09 JSON en literals</a>

    <button class="dropdown-btn">S2-FE-M07 Objecten
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint3/frontend/lab04.html">Lab 04</a>
        <a href="/sprint3/frontend/lab05.html">Lab 05</a>
        <a href="/sprint3/frontend/lab06.html">Lab 06</a>
    </div>

    <button class="dropdown-btn">S2-FE-M08 Structuren
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint3/frontend/lab07.html">Lab 07</a>
        <a href="/sprint3/frontend/lab08.html">Lab 08</a>
        <a href="/sprint3/frontend/lab09.html">Lab 09</a>
    </div>

    <button class="dropdown-btn">S2-FE-M09 Functies
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/sprint3/frontend/lab10.html">Lab 10</a>
        <a href="/sprint3/frontend/mijn-functions.js">mijn-functions.js</a>
        <a href="/sprint3/frontend/mijnfunctions.js">mijnfucntions.js</a>
        <a href="/sprint3/frontend/mijnfunctions.html">mijnfunctions.html</a>
    </div>


</div>

<div class="main">
<?php
//Formatteren
$format = '%A %d %B %Y %H:%M:%S';

//lokale datum instelling
setlocale(LC_TIME, "nld_NLD");
$ned = strftime($format);
echo "<br>Vandaag met tijd: " . $ned;

//date_diff
$geboortedatum = date_create("18-04-2001");
echo "<br>Geboortedatum: " . date_format($geboortedatum, "d-m-Y");
$vandaag = date_create("now");
echo "<br>Vandaag: " . date_format($vandaag, "d-m-Y");

$vandaagDateTime = new DateTime("now");
$timestamp = $vandaagDateTime->getTimestamp();

$interval = date_diff($geboortedatum, $vandaag);
$seconden = (new DateTime())->setTimeStamp(0)->add($interval)->getTimeStamp();
$minuten = round($seconden/60);
$uren = round($minuten/60);
$dagen = round($uren/24);
$weken = round($dagen/7);
$maanden = round($weken/4.32);
?>
<div style="
    border-style: solid;
    border-width: 5px;
    border-color: red;
    border-radius: 25px;
    background: #ffff4d;
    padding: 20;
    width: 300px;
    height: 300px;
    font-family: Palatino Linotype, Book Antiqua, Palatino, serif ;
    font-size: 18pt;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;">
    <?php
    echo "<br>U leeft al: " . $maanden . " maanden, of";
    echo "<br>" . $weken . " weken, of";
    echo "<br>" . $dagen . " dagen, of";
    echo "<br>" . $uren . " uren, of";
    echo "<br>" . $minuten . " minuten, of";
    echo "<br>" . $seconden . " seconden.";
    ?>
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
