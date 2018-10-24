<!DOCTYPE html>

<html lang="en">
<head>
    <title id="title">This is replaced by the filename</title>
    <script type="text/javascript">
        var url = window.location.pathname; // gets the pathname of the file
        var str = url.substring(url.lastIndexOf('/')+1); // removes everything before the filename
        var filename = str.replace(/%20/g, " "); // if the filename has multiple words separated by spaces, browsers do not like that and replace each space with a %20. This replace %20 with a space.
        document.getElementById("title").innerHTML = filename;

            let klantnaam = prompt(`Wat is uw naam?`);
            let aantal = Number(prompt(`Hoeveel boeken wou u bestellen?`));
            let betaling = prompt(`Wat is uw gewenste manier van betalen?`);
            let titel = `JavaScript`;
            let prijs = 29.90;
            let bedrag = aantal * prijs;
            let btw = (bedrag * 6) / 100;
            let totaal = bedrag + btw;
        document.write("<div class=\"main\">");
            document.write(`<br> Bedankt voor je bestelling: ${klantnaam}<br> Boektitel is: ${titel}<br> Aantal te bestellen: ${aantal}`);
            document.write(`<br> Prijs per boek is: ${prijs.toFixed(2)}`);
                document.write(`<br> Bedrag: ${bedrag.toFixed(2)}`);
                    document.write(`<br> Btw: ${btw.toFixed(2)}`);
                        document.write(`<br> Totaal inclusief BTW is: ${totaal.toFixed(2)}`);
                            document.write(`<br> Gewenste betaling: ${betaling}`);


    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
</head>
<body>



</div>



<?php include '../sidebar.php'; ?>
</body>

</html>