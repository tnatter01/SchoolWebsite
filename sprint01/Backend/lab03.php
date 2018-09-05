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
    <?php



    function printArray($item, $key){

        echo "<br>$key" . ": "."<i> $item </i> ";

    }



    $playlist = array(

        array("genre" => "hiphop","auteur" => "John Williams", "titel" => "My Girl"),

        array("genre" => "Jazz","auteur" => "John Coltrane", "titel" => "New York"),

        array("genre" => "hiphop","auteur" => "Shakira", "titel" => "Obsession")

    );



    echo "<h3>Lab 03 stap 1</h3>";

    echo "---- Stap 1: Mijn playlist:";

    array_walk_recursive($playlist, 'printArray');



    array_push($playlist, ['genre' => 'Latin', 'auteur' => 'Caetano Veloso', 'titel' => 'Cafe Atlantico']);



    echo "<h3>Lab 03 stap 2</h3>";

    echo "<br>---- Stap 2: Track toevoegen";

    array_walk_recursive($playlist, 'printArray');



    echo "<h3>Lab 03 stap 3</h3>";

    function printTracks($item, $key){

        $track = implode(' | ',$item);

        echo "<br>Track $key: $track";

    }



    echo "<br>---- Stap 3: Track doorlopen:";

    array_walk($playlist, 'printTracks');







    ?>
</div>



<?php include '../sidebar.php'; ?>
</body>

</html>