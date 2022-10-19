<!DOCTYPE html>
<html lang="fr">
 	<head>
 		<title>Voyage Facile</title>
		<meta charset="UTF-8" />
		<link href="index.css" rel= "stylesheet">
		<link href="Menu.css" rel= "stylesheet">
 	</head>
 	
 	<body>

		<?php include('header.php'); ?>

		
		<div class="accueil_conteneur1">
		<h1>Vivez un voyage inoubliable dans l'une de nos nombreuses destinations.</h1>
		<span class="accueil_conteneur1_deco"></span>
		<button class="accueil_bouton_reservation" onclick="self.location.href='voyages.php';" >Je trouve mon voyage →</button>
		</div>

 		<fieldset>
 			<legend>Les voyages préférés de nos utilisateurs</legend>
 			<table class="espacement">
 			<tr>
				<td> Paris </td> <td> New York </td> <td> 15 Mai 2021 </td> <td> 8 h 20 min </td> <td> 300 € </td>
				<td>
					<label>
						<input type="button" class="bouton_reservation" value="Réserver" onclick="self.location.href='voyages.php'">
					</label>
				</td>
			</tr>

 			<tr>
				<td> Lille </td> <td> Londres </td> <td> 25 Octobre 2021 </td> <td> 8 h 20 min </td> <td> 300 € </td>
			</tr>
			</table>
 		</fieldset>
	
 		<fieldset>
 			<legend>Les destinations du moment</legend>
 			<table class="espacement">
 			<tr> <td> Marseille </td> <td> Alger </td> <td> 19 Avril 2021 </td> <td> 28 h 30 min </td> <td> 430 € </td>
				<td>
				<label>
					<input type="button" class="bouton_reservation" value="Réserver" onclick="self.location.href='voyages.php'">
				</label>
				</td>
			</tr>
 			<tr>
				<td> Lille </td> <td> Amsterdam </td> <td> 25 Décembre 2021 </td> <td> 3 h 45 min </td> <td> 300 € </td>
			</tr>
 			</table>
 		</fieldset>
		
 		<fieldset>
 			<legend>Les offres à ne pas rater</legend>
 			<table class="espacement">
 			<tr> <td> Lyon </td> <td> Istanbul </td> <td> 30 Juin 2021 </td> <td> 3 h 05 min </td> <td> 260 € </td>
			<td>
				<label>
					<input type="button" class="bouton_reservation" value="Réserver" onclick="self.location.href='voyages.php'">
				</label>
			</td>
			</tr>
 			<tr>
				 <td> Paris </td> <td> Vancouver </td> <td> 12 Juin 2021 </td> <td> 12 h 45 min </td> <td> 490 € </td>
			</tr>
 			</table>
 		</fieldset>

		<?php include('footer.php'); ?>

 	</body>
 	</html>
