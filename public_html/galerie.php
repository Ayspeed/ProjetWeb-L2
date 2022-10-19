<!DOCTYPE html>
<html lang="fr">
 	<head>
 		<title>Galerie</title>
		<meta charset="UTF-8" />
		<link href="galerie.css" rel= "stylesheet">
		<link href="Menu.css" rel= "stylesheet">
 	</head>
 	
 	<body>
	<?php include('header.php'); ?>
        <h1>
		<U>
			Galerie Photos
		</U>
		</h1>
		<p>
			On sait que parfois les choix ne sont pas faciles, quand c'est la première fois qu'on utilise ce site, on a peur du résultat parce que la plus part du temps il est question
			d'une assez grosse somme d'argent afin d'effectuer la réservation.
			Pour rassurer nos clients, nous avons mit en place cette page, qui regroupe quelques photos, des lieux et activités, réserver par nos clients, afin que cela puisse vous rassurez
			un minimum soit-il.
		</p>
		<h2>
		<U>
			Lieu d'hebergement
		</U>
		</h2>
		<p>
			Voici des images des quelques hotels et services d'hébergements auxquelles nos clients ont pu profiter grâce à notre site :
		</p>

		<div class="contenu_carou_auto">
		<div class="caroussel-image">
			<img src="images/hotel1.jfif" alt>
			<img src="images/hotel2.jfif" alt>
			<img src="images/hotel3.jfif" alt>
			<img src="images/hotel4.jfif" alt>
			<img src="images/hotel5.jfif" alt>
			<img src="images/hotel6.jfif" alt>
			<img src="images/hotel7.jpg" alt>
			<img src="images/hotel8.jpg" alt>
		</div>
		</div>
		<h2>
		<U>
			Activités de nos clients
		</U>
		</h2>
		
		<p>
			Voici des images des quelques activités auxquelles nos clients ont pu profiter grâce à notre site :
		
		</p>
		<div class="contenu_carou_auto">
		<div class="caroussel-image">
			<img src="images/plongée1.jpg" alt>
			<img src="images/golf1.jpg" alt>
			<img src="images/ski1.jpg" alt>
			<img src="images/jet-ski1.jpg" alt>
			<img src="images/balade1.jpg" alt>
			<img src="images/parachute1.jpg" alt>
			<img src="images/cheval1.jpg" alt>
			<img src="images/restaurant.jpg" alt>
		</div>
		</div>
		<?php include('footer.php'); ?>
    </body>
</html>