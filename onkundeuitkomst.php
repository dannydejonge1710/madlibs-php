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

		<p>
			Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"];?>.
			 Neem nou meneer <?php echo $_POST["opschieten"];?>.
			 Zelf met de hulp van een <?php echo $_POST["vakantie"];?>
			 of zelfs <?php echo $_POST["getal"];?>
			 kan <?php echo $_POST["opschieten"];?>
			 niet <?php echo $_POST["kunnen"];?>.
			 Dat heeft niet te maken met een gebrek aan <?php echo $_POST["beste"];?>,
			 maar met een teveel aan <?php echo $_POST["slechtste"];?>.
			 Te veel <?php echo $_POST["slechtste"];?> 
			 leidt tot <?php echo $_POST["overkomen"];?>
			 en dat is niet goed als je wilt kunnen <?php echo $_POST["kunnen"];?>.
			 Helaas voor <?php echo $_POST["opschieten"];?>.
		</p>

		</main>

		<footer>Thank you for visiting our web site.</footer>

	</div>

</body>

</html>