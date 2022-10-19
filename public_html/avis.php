<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Avis</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" media="all" href="avis.css" >
	</head>

	<body>

		<form action="avis_membre.php" method="get">

		<p class="fil">
			<a href="index.php">accueil</a>
			|
			avis
		</p>
		
		<h1> Avis des clients </h1>

		<fieldset id="avis">
			<legend>Donnez votre avis</legend>

			<textarea rows="5" cols="60" name="comment" class="textarea"> </textarea>

			</br>

			<p> Avez-vous aimez notre site? </p>

			</br>

			<label id="note"> Pas du tout
			<input type="range" name="note" min="0" max="5" step="1" onchange="noteF.value=note.value">
			Carrément top </label>

			</br>

			<label> Note :</label>
			<output name="noteF">0</output>
			</br>
			<input type="submit" name="envoyer">

		</fieldset>
		</form>
	
		<hr>

		<h2> Avis : </h2>

		<fieldset>
		Tom | 3 avis

		<hr>
		<p>
		Site au top, j'ai pu faire un merveilleux voyage à New York.
		</br>
		</p>

		<p class="date">
		Date du voyage : 15 février 2021
		</p>

		</fieldset>

		</br>

		<fieldset>
		Margaux | 5 avis

		<hr>
		<p>
		Magnifique voyage à Amsterdam, sans difficulté ni accroc malgré la covid-19, je recommande fortement.
		</p>

		<p class="date">
		Date du voyage : 10 janvier 2021
		</p>

		</fieldset>

		</br>

		<fieldset>
		Kevin | 1 avis

		<hr>
		<p>
		Ma femme m'a quitté pcq elle sait pas nagé et je l'ai fais tomber du jet ski, merci bcp !!
		</p>

		<p class="date">
		Date du voyage : 8 juin 2020
		</p>

		</fieldset>
		
	</body>
</html>