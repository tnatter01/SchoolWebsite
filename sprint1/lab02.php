

<html>

	<head>
		<title>Opdracht lab02.php</title>
		
		<link rel="stylesheet" type="text/css" href="groepspaginacss.css">
		<link rel="stylesheet" type="text/css" href="nlvlagphp.css">	
	</head>
	
	<body>
	
		<header class="header">
			<h1>
			Opdracht lab02.php
			</h1>
		</header>
		
		<div class="menu">
			<a href="index.html">Groepspagina</a>
			<a href="twan.html">Portfolio</a>
			<a href="weekdagen.html">Opdracht weekdagen.html</a>
			<a href="nlvlag.html">Opdracht nlvlag.html</a>
			<a href="weekdagen.php">Opdracht weekdagen.php</a>
			<a href="nlvlag.php">Opdracht nlvlag.php</a>
			<a href="rekenen.html">Opdracht rekenen verhoudingen</a>
			<a href="thisisme.php">Opdracht thisisme.php</a>
			<a href="quotes.php">Opdracht quotes.php</a>
			<a href="scope.php">Opdracht scope.php</a>
			<a href="lab01.php">Opdracht lab01.php</a>
			<a href="lab02.php">Opdracht lab02.php</a>
			<a href="compare.php">Opdracht compare.php</a>
			<a href="operators.php">Opdracht operators.php</a>
			<a href="moreoperators.php">Opdracht moreoperators.php</a>
			<a href="dobbel1.php">Opdracht dobbel1.php</a>
			<a href="kaartspel1.php">Opdracht kaartspel1.php</a>
			<a href="onzegroep.php">Opdracht onzegroep.php</a>
			<a href="eredivisie1.php">Opdracht eredivisie1.php</a>
			<a href="lab03.php">Opdracht lab03.php</a>
			
		</div>
		
		<div class="opdracht">
		
			<?php
				$naam = "Karim";
				$naam2 = "Sophie";
				$nederlands = "8.5";
				$engels = "7.7";
				$rekenen = "6.7";
				$programmeren = "8.5";
				$databases = "9.4";
				$nederlands2 = "8.9";
				$engels2 = "8.7";
				$rekenen2 = "9.7";
				$programmeren2 = "9.5";
				$databases2 = "9.2";
				$totaal = $nederlands + $engels + $rekenen + $programmeren + $databases;
				$totaal2 = $nederlands2 + $engels2 + $rekenen2 + $programmeren2 + $databases2;
				$gemiddeld = $totaal/5;
				$gemiddeld2 = $totaal2/5;
				$groepsgemiddeldentotaal = $gemiddeld + $gemiddeld2;
				$groepsgemiddelde = $groepsgemiddeldentotaal/2;

				echo "<table border='1'>";
				echo "<caption>";
				echo	"<strong>Rapport</strong>";
				echo "</caption>";
				echo "<thead>";
					echo "<tr><th>Naam</th><th>Nederlands</th><th>Engels</th><th>Rekenen</th><th>Programmeren</th><th>Databases</th><th>Gemiddeld</th></tr>";
				echo "</thead>";
				echo "<tbody>";
					echo "<tr>";
					echo "<td>$naam</td>";
					echo "<td>$nederlands</td>";
					echo "<td>$engels</td>";
					echo "<td>$rekenen</td>";
					echo "<td>$programmeren</td>";
					echo "<td>$databases</td>"; 
					echo "<td>$gemiddeld</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>$naam2</td>";
					echo "<td>$nederlands2</td>";
					echo "<td>$engels2</td>";
					echo "<td>$rekenen2</td>";
					echo "<td>$programmeren2</td>";
					echo "<td>$databases2</td>";
					echo "<td>$gemiddeld2</td>";
					echo "</tr>";
				 echo "</tbody>";

				echo "<tfoot>";
					echo "<tr><td colspan='6'>Groep gemiddeld</td>";
					echo "<td>$groepsgemiddelde</td></tr>";
				 echo "</tfoot>";
				 echo "</table>";
				?>
			
		</div>
		
		
	</body>
</html>

 
