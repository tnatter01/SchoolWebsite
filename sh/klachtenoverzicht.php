<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klachtenoverzicht</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Twan
 * Date: 5-4-2018
 * Time: 09:44
 */
$con=mysqli_connect("localhost", "root", "", "schiphol");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Klachtenformulier");

echo "<h1>Overzicht Schiphol Meldpunt</h1><br>";

echo "<br><h2>Gerangschikt op postcode, datum en tijd.</h2>";

echo "<table border='1'>
<tr>
<th>nr</th>
<th>postcode</th>
<th>datum</th>
<th>tijd</th>
<th>soort</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['klachtid'] . "</td>";
    echo "<td>" . $row['postcode'] . "</td>";
    echo "<td>" . $row['datum'] . "</td>";
    echo "<td>" . $row['tijd'] . "</td>";
    echo "<td>" . $row['soort'] . "</td>";
    echo "</tr>";
}
echo "</table>";

foreach($con->query('SELECT COUNT(*) FROM klachtenformulier WHERE soort = "geluid";') as $row) {

    echo "totaal geluidsklachten:" . $row['COUNT(*)'];
}
foreach($con->query('SELECT COUNT(*) FROM klachtenformulier WHERE soort = "milieu";') as $row) {
    echo "<tr>";
    echo "<br>totaal milieuklachten:" . $row['COUNT(*)'];
    echo "</tr>";
}
foreach($con->query('SELECT COUNT(*) FROM klachtenformulier WHERE soort = "veiligheid";') as $row) {
    echo "<tr>";
    echo "<br>totaal veiligheidsklachten:" . $row['COUNT(*)'];
    echo "</tr>";
}

mysqli_close($con);
?>
</body>
</html>

