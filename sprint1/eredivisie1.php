



<html>

	<head>
		<title>Opdracht eredivisie1.php</title>
		
		<link rel="stylesheet" type="text/css" href="groepspaginacss.css">
		<link rel="stylesheet" type="text/css" href="nlvlagphp.css">	
		<link rel="stylesheet" type="text/css" href="eredivisie.css">
	</head>
	
	<body>
	
		<header class="header">
			<h1>
			Opdracht eredivisie1.php
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
			$teams = array
			  (
			          array(12," Heracles "," Almelo ",21,6,6,9),
			          array(15," FC Twente "," Enschede ",21,4,4,13),

			  );

			echo '<table class="eredivisiestand">';
				echo "<tr>";
					echo '<th colspan="7">Eredivisiestand 7-2-2018</th>';
				echo "</tr>";
				echo "<tr>";
					echo "<td>Plaats</td>";
					echo "<td>Naam</td>";
					echo "<td>Stad</td>";
					echo "<td>Gespeelde westrijden</td>";
					echo "<td>Gewonnen wedstrijden</td>";
					echo "<td>Gelijkgespeelde wedstrijden</td>";
					echo "<td>Verloren wedstrijden</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>".$teams[0][0]."</td>";
					echo "<td>".$teams[0][1]."</td>";
					echo "<td>".$teams[0][2]."</td>";
					echo "<td>".$teams[0][3]."</td>";
					echo "<td>".$teams[0][4]."</td>";
					echo "<td>".$teams[0][5]."</td>";
					echo "<td>".$teams[0][6]."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>".$teams[1][0]."</td>";
					echo "<td>".$teams[1][1]."</td>";
					echo "<td>".$teams[1][2]."</td>";
					echo "<td>".$teams[1][3]."</td>";
					echo "<td>".$teams[1][4]."</td>";
					echo "<td>".$teams[1][5]."</td>";
					echo "<td>".$teams[1][6]."</td>";
				echo "</tr>";
			echo "</table>";
			
			?>

		</div>
	</body>
</html>

 
