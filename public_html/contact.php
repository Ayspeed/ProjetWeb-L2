<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>	Nous écrire </title>
		<link rel="stylesheet" href="contact.css" media="all">
	</head>
	
	<body>

	<p class="fil">
		<a href="index.php">accueil</a>
		|
		nous écrire
	</p>

	<h1>Nous contacter</h1>

	<ul>
	<li> <a href="#"> <img src="images/fb.png" alt="logo Facebook"> </a></li>
	<li> <a href="#"> <img src="images/tw.png" alt="logo Twitter"> </a></li>
	<li> <a href="#"> <img src="images/go.png" alt="logo Google+"> </a></li>
	<li> <a href="#"> <img src="images/mail.png" alt="logo Email"> </a></li>
	</ul>

	<div id="page">

	<p class="texte">
		Utilisez le formulaire ci-dessous pour soumettre votre demande :
	</p>

	<form id="formulaire" method="post" action="demandecontact.php">

	<textarea rows="5" cols="60" name="comment"> </textarea>

	<p class="item">Vous souhaitez une réponse personnalisée ? </p>

	<p>
		<input type="email"
			name="email"
			placeholder="pseudo@mailserver.net"
			pattern="[a-zA-Z0-9\.-_]{1,}@[a-zA-Z0-9\.-_]{1,}" >
	</p>

	<button type="submit" class="item"> Envoyer ! </button>

	</form>

	</div>

	</body>
</html>





