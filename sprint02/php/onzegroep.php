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



    $groepsleden = array(

        array(

            'student1' => '0299784',

            'student2' => '0265289',

            'student3' => '0257180',

            'student4' => '0299858',

            'student5' => '0300185',

            'student6' => '0299284',

            'student7' => '0303662'),

        array(

            'student1' => 'Twan' ,

            'student2' => 'Niels',

            'student3' => 'Lorenzo',

            'student4' => 'Emre',

            'student5' => 'Duncan',

            'student6' => 'Mathijs',

            'student7' => 'Tom',),

        array(

            'student1' => 'Natter' ,

            'student2' => 'Klaassen',

            'student3' => 'Peperkamp',

            'student4' => 'Ekmekci',

            'student5' => 'de Jonge',

            'student6' => 'Pattipeilohy',

            'student7' => 'Rietkerk'),

        array(

            'student1' => 'Haaksbergen' ,

            'student2' => 'Oldenzaal',

            'student3' => 'Denekamp',

            'student4' => 'Enschede',

            'student5' => 'Borculo',

            'student6' => 'Tubbergen',

            'student7' => 'Hengelo'),

        array(

            'student1' => '16' ,

            'student2' => '20',

            'student3' => '21',

            'student4' => '17',

            'student5' => '16',

            'student6' => '17',

            'student7' => '18'),

        array(

            'student1' => 'student1',

            'student2' => 'student2',

            'student3' => 'student3',

            'student4' => 'student4',

            'student5' => 'student5',

            'student6' => 'student6',

            'student7' => 'student7'),

    );



    $random = rand(1,7);

    $randomkey = "student" . $random;



    echo "Studentnummer: " . $groepsleden[0][$randomkey] . "<br>";

    echo "Voornaam: " . $groepsleden[1][$randomkey] . "<br>";

    echo "Achternaam: " . $groepsleden[2][$randomkey] . "<br>";

    echo "Woonplaats: " . $groepsleden[3][$randomkey] . "<br>";

    echo "Leeftijd: " . $groepsleden[4][$randomkey];

    ?>
</div>
</body>

</html>