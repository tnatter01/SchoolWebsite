<html>

	<head>
		<title>Opdracht compare.php</title>
		
		<link rel="stylesheet" type="text/css" href="groepspaginacss.css">
		<link rel="stylesheet" type="text/css" href="nlvlagphp.css">	
	</head>
	
	<body>
	
		<header class="header">
			<h1>
			Opdracht compare.php
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

			$getal1 = rand (1, 1000);
			$getal2 = rand (1, 1000);
			
			if ($getal1 < $getal2)
				{
					echo "$getal1 < $getal2 = true<br>";
				}
			else{
				echo "$getal1 < $getal2 = false<br>";
			}
			
			if ($getal1 > $getal2)
				{
					echo "$getal1 > $getal2 = true<br>";
				}
			else{
				echo "$getal1 > $getal2 = false<br>";
			}
			
			if ($getal1 == $getal2)
				{
					echo "$getal1 == $getal2 = true<br>";
				}
			else{
				echo "$getal1 == $getal2 = false<br>";
			}
			
			if ($getal1 === $getal2)
				{
					echo "$getal1 === $getal2 = true<br>";
				}
			else{
				echo "$getal1 === $getal2 = false<br>";
			}

			if ($getal1 >= $getal2)
				{
					echo "$getal1 >= $getal2 = true<br>";
				}
			else{
				echo "$getal1 >= $getal2 = false<br>";
			}
			
			if ($getal1 <= $getal2)
				{
					echo "$getal1 <= $getal2 = true<br>";
				}
			else{
				echo "$getal1 <= $getal2 = false<br>";
			}

			if ($getal1 != $getal2)
				{
					echo "$getal1 != $getal2 = true<br>";
				}
			else{
				echo "$getal1 != $getal2 = false<br>";
			}

			?>
			

			
		</div>
		
		
	</body>
</html>

