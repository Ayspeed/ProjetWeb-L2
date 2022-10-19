<!DOCTYPE html>
<html lang="fr">
 	<head>
 		<title>Voyage</title>
		<meta charset="UTF-8" />
		<link href="voyage.css" rel= "stylesheet">
		<link href="Menu.css" rel= "stylesheet">
	 	</head>
 	
 	<body>
		<?php include('header.php'); ?>
		
 		<fieldset>
 			<legend> Nos Voyages En Avion </legend>
 			<table>
 				<thead>
 				<tr>
          			<th>Ville de Départ</th><th>Ville d'arrivée</th><th>Date du Voyage</th><th>Durée</th><th>Prix</th>
        		</tr>
        		</thead>
        		<tbody>
        			<tr><td> Paris </td><td> Lisbonne </td><td> 27 Mars 2021 </td><td> 1 h 30 min </td><td> 100 € </td></tr>
        			<tr><td> Nantes </td><td> Toronto </td><td> 15 Avril 2021 </td><td> 10 h 20 min </td><td> 300 € </td></tr>
 					<tr><td> Paris </td><td> New York </td><td> 15 Mai 2021 </td><td> 8 h 20 min </td><td> 300 € </td></tr>
 					<tr><td> Paris </td><td> Vancouver </td><td> 12 Juin 2021 </td><td> 12 h 45 min </td><td> 490 € </td></tr>
 					<tr><td> Lyon </td><td> Istanbul </td><td> 30 Juin 2021 </td><td> 3 h 05 min </td><td> 260 € </td></tr>
 					<tr><td> Paris </td><td> Tunis </td><td> 26 Juillet 2021 </td><td> 2 h 20 min </td><td> 215 € </td></tr>
 				</tbody>
 			</table>
 		</fieldset>
		

 		<fieldset>
 			<legend>Nos Voyages en Train </legend>
 			<table>
 				<thead>
 				<tr>
          			<th>Ville de Départ</th><th>Ville d'arrivée</th><th>Date du Voyage</th><th>Durée</th><th>Prix</th>
        		</tr>
        		</thead>
        		<tbody>
        			<tr><td> Lyon </td><td> Zurich </td><td> 19 Avril 2021 </td><td> 4 h 50 min </td><td> 75 € </td></tr>
        			<tr><td> Lille </td><td> Londres </td><td> 25 Octobre 2021 </td><td> 8 h 20 min </td><td> 300 € </td></tr>
        			<tr><td> Lille </td><td> Amsterdam </td><td> 25 Décembre 2021 </td><td> 3 h 45 min </td><td> 300 € </td></tr>
 				</tbody>
 			</table>
 		</fieldset>

 		<fieldset>
 			<legend>Nos Voyages en Bateau </legend>
 			<table>
 				<thead>
 				<tr>
          			<th>Ville de Départ</th><th>Ville d'arrivée</th><th>Date du Voyage</th><th>Durée</th><th>Prix</th>
 				</tr>
        		</thead>
        		<tbody>
        			<tr><td> Marseille </td><td> Alger </td><td> 19 Avril 2021 </td><td> 28 h 30 min </td><td> 430 € </td></tr>
        			<tr><td> Lille </td><td> Londres </td><td> 25 Octobre 2021 </td><td> 1 h 30 min </td><td> 116 € </td></tr>	
 				</tbody>
 			</table>
 		</fieldset>
		
		<button class="bouton_reservation" onclick="self.location.href='reservation.php';" >Réservation →</button>
		
		<?php include('footer.php'); ?>
	</body>
</html>