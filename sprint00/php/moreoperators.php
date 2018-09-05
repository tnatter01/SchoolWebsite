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

<?php include '../sidebar.php'; ?>
</div>

<div class="main">
    <?php



    echo '<h1> Ternary operator  </h1>

		<P>Een ternary operator is een operator die bestaat in een aantal programmeertalen, waarvoor drie operanden nodig zijn in plaats van de typische één of twee die de meeste operators gebruiken<br> Het biedt een manier om een ​​eenvoudig if else-blok in te korten. </P>

		<h2> De Dot </h2>

		<p>De . (punt) operator wordt gebruikt om toegang te krijgen tot klasse-, structuur- of vakbondsleden </p>

		<h3> ++ en --  </h3>

		<p> De ++ doet er wat bij -- doet er wat af </p>

		<h4> +=, -=, *=, /= en .=  </h4>

		<p> Het is verkorte manier om die sommen te maken </p>';

    ?>
</div>
</body>

</html>