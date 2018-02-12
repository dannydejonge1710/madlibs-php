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

			<p>Welk dier zou je nooit als huisdier willen hebben?</p>
			<p>Wie is de belangrijkste persoon in je leven?</p>
			<p>In welk land zou je graag willen wonen?</p>
			<p>Wat doe je als je je verveeld?</p>
			<p>Met welk speelgoed speelde je als kind het meest?</p>
			<p>Bij welke docent spijbel je het liefst?</p>
			<p>Als je €100.000,- had, wat zou je dan kopen?</p>
			<p>Wat is je favoriete bezigheid?</p>

			<form action="madlibsuitkomst.php" method="post">

				<div id="inputs">	
					<input type="text" name="huisdier">
					<input type="text" name="belangrijkste">
					<input type="text" name="land">
					<input type="text" name="vervelen">
					<input type="text" name="speelgoed">
					<input type="text" name="spijbel">
					<input type="text" name="kopen">
					<input type="text" name="bezigheid">
				</div>
				
				<input type="submit" id="sbutton">
			</form>

		</main>

		<footer>Deze website is gemaakt door Danny.</footer>

	</div>



</body>

</html>

