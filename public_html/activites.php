<!DOCTYPE html>
<html lang="fr">
 	<head>
 		<title>Activités</title>
		<meta charset="UTF-8" />
		<link href="activites.css" rel= "stylesheet">
		<link href="Menu.css" rel= "stylesheet">
 	</head>
 	
 	<body>
	<?php include('header.php'); ?>
	<h1><U>Activités</U></h1>
	
    <p>
        Sur notre site vous pouvez trouver de nombreux services afin d'organiser votre voyage jusqu'au moindre détails.
        Pour cela nous avons mis en place notre rubrique activités, qui vous propose et vous permez de réserver l'activité qui vous convient, en fonction de la ville où vous allez.
        Pour chaque activité, vous pourrez trouver le prix, l'adresse et les horaires disponibles afin de faire des réservations parfaites.
    </p>
    <h2>
        <U>Voici nos activités :</U>
    </h2>
    <table class="tab1">
        <tbody>
            <tr><td><img src="images/Golf.jfif" class="activites" alt="Golf" ></td><td><img src="images/Plongée.jfif" class="activites" alt="Plongée" ></td><td><img src="images/Helicoptere.jfif" class="activites" alt="Hélicoptère" align="center"></td><td><img src="images/Saut.jfif" class="activites" alt="Saut en parachute" ></td></tr>
            <tr><td>Golf</td><td>Plongée sous Marine</td><td>Balade en Hélicoptère</td><td>Saut en Parachute</td></tr>
            <tr><td><img src="images/Balade.jfif" class="activites" alt="Balade à cheval" ></td><td><img src="images/Desert.jfif" class="activites" alt="Sortie dans le désert" ></td><td><img src="images/Jet.jfif" class="activites" alt="Jet-Ski" ></td><td><img src="images/Ski.jfif" class="activites" alt="Ski" ></td></tr>
            <tr><td>Balade à Cheval</td><td>Sortie dans le Désert</td><td>Jet-Ski</td><td>Ski</td></tr>
        </tbody>
    </table>
    <h2>
        <U>Tableau de disponibilité </U>
    </h2>
    <p>Voici un tableau qui vous permez de savoir si l'activité que vous souhaitez réserver est disponible et dans quelle ville :</p>
    <table class="tab2">
        <thead>
            <tr><th>Ville</th><th>Golf</th><th>Plongée</th><th>Hélicoptère</th><th>Saut en Parachute</th><th>Balade à cheval</th><th>Sortie Désert</th><th>Jet-Ski</th><th>Ski</th></tr>
        </thead>
        <tbody>
            <tr><td>Lisbonne</td><td>Disponible</td><td>Disponible</td><td>Disponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td></tr>
            <tr><td>Londres</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td></tr>
            <tr><td>Zurich</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td></tr>
            <tr><td>Amsterdam</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td></tr>
            <tr><td>Toronto</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td></tr>
            <tr><td>New York</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td></tr>
            <tr><td>Vancouver</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td></tr>
            <tr><td>Istanbul</td><td>Indisponible</td><td>Disponible</td><td>Disponible</td><td>Disponible</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td></tr>
            <tr><td>Tunis</td><td>Disponible</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Disponible</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td></tr>
            <tr><td>Alger</td><td>Indisponible</td><td>Disponible</td><td>Indisponible</td><td>Indisponible</td><td>Disponible</td><td>Disponible</td><td>Disponible</td><td>Indisponible</td></tr>
        </tbody>
    </table>
    
	<?php include('footer.php'); ?>
    </body>
</html>