<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="sprint2.css">
    <meta charset="UTF-8">
    <title>Onzegroep 2</title>

</head>
<body>
<ul>
    <li><a class="active" href="index.html">Home</a></li>


    <li><a href="oneven.php">Oneven</a></li>
    <li><a href="grolsch.php">Grolsch</a></li>
    <li><a href="celsius_fahrenheit_kelvin.php">Temperaturen</a></li>
    <li><a href="yahtzee.php">Yahtzee</a></li>
    <li><a href="fibonacci.php">Fibonacci</a></li>
    <li><a href="check_bsn.php">Check BSN</a></li>
    <!--<li><a href="dobbel2.php">Dobbel 2</a></li>
   <li><a href="onzegroep2.php">Onzegroep 2</a></li>-->
    <li><a href="eredivisie2.php">Eredivisie 2</a></li>
    <!--<li><a href="lab04.php">Lab 04</a></li>
    <li><a href="lab05.php">Lab 05</a></li>
    <li><a href="lab06.php">Lab 06</a></li>
    <li><a href="lab07.php">Lab 07</a></li>
    <li><a href="lab08.php">Lab 08</a></li>-->




</ul>

<button type="button" onclick='window.location.reload(true);'>Kies random groepslid</button> <br>

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
        'student7' => '18')
);

$random = rand(1,7);
$randomkey = "student" . $random;


foreach ($groepsleden as $row) {
    echo $row['student1'];
    echo "<br>";
    echo $row['student2'];
    echo "<br>";
    echo $row['student3'];
    echo "<br>";
    echo $row['student4'];
    echo "<br>";
    echo $row['student5'];
    echo "<br>";
    echo $row['student6'];
    echo "<br>";
    echo $row['student7'];
    echo "<br>";
}

?>


</body>
</html>