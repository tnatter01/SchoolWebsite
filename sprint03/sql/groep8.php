<html lang="en">
<head>
    <title id="title">groep8.sql</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css"
</head>
<body>


</div>

<div class="main">
    <p>CREATE DATABASE IF NOT EXISTS groep8; <br>
        CREATE TABLE IF NOT EXISTS NAW (<br>
        PersonID int NOT NULL, <br>
        Voornaam varchar(255), <br>
        Achternaam varchar(255), <br>
        Adres varchar(255), <br>
        Woonplaats varchar(255), <br>
        Postcode varchar(6), <br>
        Land varchar(255)
        ); <br><br>
        CREATE TABLE IF NOT EXISTS hobbies ( <br>
        PersonID int NOT NULL, <br>
        Hobbies varchar(255)
        ); <br><br>
        CREATE TABLE IF NOT EXISTS geboortedatum ( <br>
        PersonID int NOT NULL, <br>
        Geboortedatum DATE
        ); <br><br>
        CREATE TABLE IF NOT EXISTS vervoermiddel ( <br>
        PersonID int NOT NULL, <br>
        Vervoermiddel varchar(255) <br>
        ); <br><br>
        CREATE TABLE IF NOT EXISTS bijbaantje ( <br>
        PersonID int NOT NULL, <br>
        Bijbaantje varchar(255)
        ); <br><br>
        CREATE TABLE IF NOT EXISTS vakantieland ( <br>
        PersonID int NOT NULL, <br>
        Vakantieland varchar(255)
        ); <br><br>
        CREATE TABLE IF NOT EXISTS semester ( <br>
        PersonID int NOT NULL, <br>
        Semester int NOT NULL
        ); <br><br>

        INSERT INTO NAW (PersonID, Voornaam, Achternaam, Adres, Woonplaats, Postcode, Land) <br>
        VALUES <br>
        ('1', 'Twan', 'Natter', 'Pinksterbloem 9', 'Haaksbergen', '7483BG', 'Nederland'), <br>
        ('2', 'Niels', 'Klaassem', 'Hunenveldlaan 91', 'Oldenzaal', '7576ZW', 'Nederland'), <br>
        ('3', 'Emre', 'Ekmekci', 'Benkoelenstraat 14', 'Enschede', '7541XZ', 'Nederland'), <br>
        ('4', 'Duncan', 'de Jonge', 'Lochemseweg 58', 'Borculo', '7271WE', 'Nederland'), <br>
        ('5', 'Mathijs', 'Pattipeilohy', 'Prins Bernhardstart 15', 'Tubbergen', '7651ED', 'Nederland'), <br>
        ('6', 'Tom', 'Rietkerk', 'Woltersweg 8', 'Hengelo', '7552DC', 'Nederland'), <br>
        ('7', 'Lorenzo', 'Peperkamp', 'De Meerkoet 12', 'Denekamp', '7591LN', 'Nederland'); <br><br>

        INSERT INTO hobbies (PersonID, Hobbies) <br>
        VALUES <br>
        ('1', 'Voetballen'), <br>
        ('2', 'Hobby'), <br>
        ('3', 'Hobby'), <br>
        ('4', 'Hobby'), <br>
        ('5', 'Hobby'),<br>
        ('6', 'Hobby'),<br>
        ('7', 'Hobby');<br><br>

        INSERT INTO geboortedatum (PersonID, Geboortedatum)<br>
        VALUES<br>
        ('1', '2001-04-18'),<br>
        ('2', '1997-06-09'),<br>
        ('3', '2000-07-29'),<br>
        ('4', '2001-05-30'),<br>
        ('5', '2001-06-12'),<br>
        ('6', '1999-11-21'),<br>
        ('7', '1996-07-30');<br><br>

        INSERT INTO vervoermiddel (PersonID, Vervoermiddel) <br>
        VALUES <br>
        ('1', 'Bus'),<br>
        ('2', 'Trein'),<br>
        ('3', 'Trein'),<br>
        ('4', 'Bus'),<br>
        ('5', 'Bus'),<br>
        ('6', 'Fiets'),<br>
        ('7', 'Trein');<br><br>

        INSERT INTO bijbaantje (PersonID, Bijbaantje)<br>
        VALUES<br>
        ('1', 'geen'),<br>
        ('2', 'geen'),<br>
        ('3', 'Action'),<br>
        ('4', 'geen'),<br>
        ('5', 'Krantenwijk'),<br>
        ('6', 'Flexwerf'),<br>
        ('7', 'Fabriek');<br><br>

        INSERT INTO vakantieland (PersonID, Vakantieland)<br>
        VALUES<br>
        ('1', 'Italie'),<br>
        ('2', 'Ibiza'),<br>
        ('3', 'Turkije'),<br>
        ('4', 'Canada'),<br>
        ('5', 'Indonesië'),<br>
        ('6', 'Canada'),<br>
        ('7', 'Japan');<br><br>

        INSERT INTO semester (PersonID, Semester)<br>
        VALUES<br>
        ('1', '2'),<br>
        ('2', '2'),<br>
        ('3', '2'),<br>
        ('4', '2'),<br>
        ('5', '2'),<br>
        ('6', '2'),<br>
        ('7', '2');<br>

    </p>
    <img src="img/groep8.png">
</div>
<?php include '../sidebar.php'; ?>
</body>

</html>