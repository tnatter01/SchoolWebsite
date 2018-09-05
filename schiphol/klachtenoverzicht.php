<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Klachtenoverzicht</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="vliegtuig.jpg">
		<link rel="stylesheet" href="klachtenoverzicht.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script>
			function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {x.className = "topnav";}
			}
		</script>
		
	</head>
<body>	

<header>	
	<img id="schiphollogo" src="schiphol.png" alt="schiphol logo">
	<div class="topnav" id="myTopnav">	
		<a href="home.html">Home</a>
		<a href="klachten.html">Klachtenformulier</a>
		<a href="overzicht.php">Klachtenoverzicht</a>
		<a href="about.html">About us</a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
</header>
	
	<div id="main" class="row"  style="width: 100%;">
	
		<div id="leftaside" class="col-sm-1">	
		</div>
		
		<div id="centercontent" class="col-sm-10">
			
			<div id="formulier">
			
			<?php

			$con=mysqli_connect("fdb19.awardspace.net", "2664816_schiphol", "5E62reWK", "2664816_schiphol");

			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			?>
			
			<div id="overzichttekst">
			
			<?php

			$result = mysqli_query($con,"SELECT * FROM Klachtenformulier");

			echo "<h1>Overzicht Schiphol Meldpunt</h1><br>";

			echo "<br><h2>Gerangschikt op postcode, datum en tijd.</h2>";
			?>
			
			</div>
			<br>
			<div id="tabel">
				<div id="totaalintabel">
					<?php
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
				</div>
			<?php
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
			?>
			</div>
		</div>
		<div id="rightaside" class="col-sm-1">
		</div>
	</div>
</body>
</html>
