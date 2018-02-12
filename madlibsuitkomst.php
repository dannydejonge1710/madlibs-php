<!DOCTYPE html>

<html lang="nl">

<head>

	<title>Madlibs</title>
	<style><?php include 'css/css.css'; ?></style>
	<meta charset="UTF-8">

</head>

<body>
	
	<div class="container">

		<img id="logo" src="img/logo.png" alt="Logo">

		<header>

			<nav>
				<ul>
					<li><a href="madlibs.php">Er heerst paniek...</a></li>
		    		<li><a href="onkunde.php">Onkunde</a></li>
		    	</ul>
			</nav>

		</header>

		<main>

		<p>Er heerst paniek in koninkrijk <?php echo $_POST["land"];?>. Koning <?php echo $_POST["spijbel"];?> is ten einde raad en als koning <?php echo $_POST["spijbel"];?> ten einde raad is, dan roept hij zijn ten-einde-raadheer <?php echo $_POST["belangrijkste"];?>.</p>

		<p>"<?php echo $_POST["belangrijkste"];?>! Het is een ramp! Het is een schande!"</p>

		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?</p>

		<p>"Mijn <?php echo $_POST["huisdier"];?>! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"];?> voor hem gekocht!"</p>

		<p>"Majesteit, uw <?php echo $_POST["huisdier"];?> komt vast vanzelf weer terug?"</p>

		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"];?> leren?"</p>

		<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["kopen"];?> voor gebruiken?"</p>

		<p>"<?php echo $_POST["belangrijkste"];?>, je hebt helemaal gelijk! Wzt zou ik doen als ik jou niet had."</p>

		<p>"<?php echo $_POST["vervelen"];?>, Sire."</p>

		</main>

		<footer>Thank you for visiting our web site.</footer>



</div>

</body>

</html>