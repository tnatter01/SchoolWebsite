<script language="javascript">
    function Brandstofverbruik()
    {
        var Prijsbenzine, Afstand, Verbuik, Kostprijs
        Prijsbenzine=prompt("Geef de prijs van 1 liter bezine?","")
        Afstand=prompt("Geef de Astand die je rijdt?","")
        Verbuik=6
        Kostprijs=(Verbuik*Prijsbenzine*Afstand)/100
        alert("Je reis kost "+Kostprijs+" euro.")
    }
</script>




<html lang="en">
<head>
    <title id="title">fiche 3 Brandstofverbruik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
</head>
<body>

<div class="main">

    <h1 style="text-align: center;"><span style="font-family: Verdana;">Brandstofverbruik berekenen
            <br>
      </span>
    </h1>
    <h3 style="text-align: center;">
        <span style="font-family: Verdana;">
            <br>
      </span>
    </h3>
    <div style="text-align: center;">
        <span style="font-family: Verdana;">
            <button type="button" name="knopnaam" language="javascript" onclick="Brandstofverbruik()">drukhier
            </button>
        </span>
    </div>
    <div style="text-align: center;"><span style="font-family: Verdana;">
            <br>
      </span>
    </div>
    <div style="text-align: center;"><img src="brandstofverbruik.png" alt="">&nbsp;<br>
            style="font-family: Verdana;">
        <span style="font-family: Verdana;"></span><br style="font-family: Verdana;">
    </div>
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>