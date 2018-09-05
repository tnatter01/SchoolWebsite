



<html>

	<head>
		<title>Opdracht onzegroep.php</title>
		
		<link rel="stylesheet" type="text/css" href="groepspaginacss.css">
		<link rel="stylesheet" type="text/css" href="nlvlagphp.css">	

	</head>
	
	<body>
	
		<header class="header">
			<h1>
			Opdracht onzegroep.php
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
	</body>
</html>


