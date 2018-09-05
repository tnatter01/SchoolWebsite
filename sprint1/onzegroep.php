



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


