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

			<h1>Er heerst paniek...</h1>

			<p>Wat zou je graag willen kunnen?</p>
			<p>Met welke persoon kun je goed opschieten?</p>
			<p>Wat is je favoriete getal?</p>
			<p>Wat heb je altijd bij je als je op vakantie gaat?</p>
			<p>Wat is je beste persoonlijke eigenschap?</p>
			<p>Wat is je slechtste persoonlijke eigenschap?</p>
			<p>Wat is het ergste wat je kan overkomen?</p>

			<form action="onkundeuitkomst.php" method="post">

				<div id="inputs">	
					<input type="text" name="kunnen">
					<input type="text" name="opschieten">
					<input type="text" name="getal">
					<input type="text" name="vakantie">
					<input type="text" name="beste">
					<input type="text" name="slechtste">
					<input type="text" name="overkomen">
				</div>
				
				<input type="submit" id="sbutton">
			</form>
			
		</main>

		<footer>Deze website is gemaakt door Danny.</footer>

	</div>

</body>

</html>