CREATE DATABASE IF NOT EXISTS groep8;
CREATE TABLE IF NOT EXISTS NAW (
    PersonID int NOT NULL,
    Voornaam varchar(255),
    Achternaam varchar(255),
    Adres varchar(255),
    Woonplaats varchar(255),
	Postcode varchar(6),
	Land varchar(255)
);
CREATE TABLE IF NOT EXISTS hobbies (
    PersonID int NOT NULL,
    Hobbies varchar(255)
);
CREATE TABLE IF NOT EXISTS geboortedatum (
    PersonID int NOT NULL,
    Geboortedatum DATE
);
CREATE TABLE IF NOT EXISTS vervoermiddel (
    PersonID int NOT NULL,
    Vervoermiddel varchar(255)
);
CREATE TABLE IF NOT EXISTS bijbaantje (
    PersonID int NOT NULL,
    Bijbaantje varchar(255)
);
CREATE TABLE IF NOT EXISTS vakantieland (
    PersonID int NOT NULL,
    Vakantieland varchar(255)
);
CREATE TABLE IF NOT EXISTS semester (
    PersonID int NOT NULL,
    Semester int NOT NULL
);

INSERT INTO NAW (PersonID, Voornaam, Achternaam, Adres, Woonplaats, Postcode, Land)
VALUES 
('1', 'Twan', 'Natter', 'Pinksterbloem 9', 'Haaksbergen', '7483BG', 'Nederland'),
('2', 'Niels', 'Klaassem', 'Hunenveldlaan 91', 'Oldenzaal', '7576ZW', 'Nederland'),
('3', 'Emre', 'Ekmekci', 'Benkoelenstraat 14', 'Enschede', '7541XZ', 'Nederland'),
('4', 'Duncan', 'de Jonge', 'Lochemseweg 58', 'Borculo', '7271WE', 'Nederland'),
('5', 'Mathijs', 'Pattipeilohy', 'Prins Bernhardstart 15', 'Tubbergen', '7651ED', 'Nederland'),
('6', 'Tom', 'Rietkerk', 'Woltersweg 8', 'Hengelo', '7552DC', 'Nederland'),
('7', 'Lorenzo', 'Peperkamp', 'De Meerkoet 12', 'Denekamp', '7591LN', 'Nederland');

INSERT INTO hobbies (PersonID, Hobbies)
VALUES 
('1', 'Voetballen'),
('2', 'Hobby'),
('3', 'Hobby'),
('4', 'Hobby'),
('5', 'Hobby'),
('6', 'Hobby'),
('7', 'Hobby');

INSERT INTO geboortedatum (PersonID, Geboortedatum)
VALUES 
('1', '2001-04-18'),
('2', '1997-06-09'),
('3', '2000-07-29'),
('4', '2001-05-30'),
('5', '2001-06-12'),
('6', '1999-11-21'),
('7', '1996-07-30');

INSERT INTO vervoermiddel (PersonID, Vervoermiddel)
VALUES 
('1', 'Bus'),
('2', 'Trein'),
('3', 'Trein'),
('4', 'Bus'),
('5', 'Bus'),
('6', 'Fiets'),
('7', 'Trein');

INSERT INTO bijbaantje (PersonID, Bijbaantje)
VALUES
('1', 'geen'),
('2', 'geen'),
('3', 'Action'),
('4', 'geen'),
('5', 'Krantenwijk'),
('6', 'Flexwerf'),
('7', 'Fabriek');

INSERT INTO vakantieland (PersonID, Vakantieland)
VALUES
('1', 'Italie'),
('2', 'Ibiza'),
('3', 'Turkije'),
('4', 'Canada'),
('5', 'Indonesië'),
('6', 'Canada'),
('7', 'Japan');

INSERT INTO semester (PersonID, Semester)
VALUES 
('1', '2'),
('2', '2'),
('3', '2'),
('4', '2'),
('5', '2'),
('6', '2'),
('7', '2');