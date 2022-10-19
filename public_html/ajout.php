<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
	<meta charset="utf-8">
	<title>Demande d'ajout sur le site</title>
	<link rel="stylesheet" href="demandeajout.css">
	<link href="Menu.css" rel= "stylesheet">
	</head>

	<body>
	<?php include('header.php'); ?>
	
	<fieldset>
	<legend>Formulaire pour apparaître sur le site</legend>
	<table>
		<tr>
		<td class="grille"><p>Infos</p></td>
        <td class="grille"><p>Localisation</p></td>
        <td class="grille"><p>Ancienneté dans le métier</p></td>
        <td class="grille"><p>Type de service</p></td>
        <td class="grille"><p>Environnement du site</p></td>
        <td class="grille"><p>Documents</p></td>
		</tr>
		
		<tr>
		<td class="grille">
        <label>Email :</label>
        <input type="text" size="20"></br>
        <label>Téléphone :</label>
        <input type="text" size="16"></br>
        <label>Adresse :</label>
        <input type="text" size="18"></br>
		</td>
		<td class="grille">

        <input type="text" placeholder="Pays" required></br>
        <input type="text" placeholder="Region" required></br>
        <input type="text" placeholder="Ville" required></br>
		</td>
		<td class="grille">

        <input type="radio" name="-2an">
        <label>- de 2 ans</label></br>
        <input type="radio" name="2et5an">
        <label>entre 2 et 5 ans</label></br>
        <input type="radio" name="5et10an">
        <label>entre 5 et 10 ans</label></br>
        <input type="radio" name="+10an">
        <label>+ de 10 ans</label>
		</td>
		<td class="grille">

        <input type="radio" name="lgm">
        <label>Logement</label></br>
        <input type="radio" name="rsr">
        <label>Restaurant</label></br>
        <input type="radio" name="loisir">
        <label>Loisir</label></br>
        <input type="radio" name="A">
        <label>Autre  </label><input type="text" placeholder="Préciser" size="10">
		</td>


		<td class="grille">

        <input type="radio" name="GV">
        <label>Grande ville</label></br>
        <input type="radio" name="PV">
        <label>Petite ville/village</label></br>
        <input type="radio" name="N">
        <label>Isolé dans la nature</label></br>
        <input type="radio" name="A">
        <label>Autre  </label><input type="text" placeholder="Préciser" size="10">
		</td>
		
		<td class="grille">
        <label>carte d'identité recto</label></br>
        <input type="file"></br>
        <label>carte d'identité verso</label></br>
        <input type="file"></br>
        <label>titre de propriété</label></br>
        <input type="file"></br>
		</td>
		</tr>
	</table>
	</fieldset>

	<div class="commentaires">
	<p>Commentaires sur le lieu</p>

	<textarea name="name" rows="7" cols="70"></textarea></br>
	<button type="submit" name="button">Envoyer</button>
	</div>
	
	<?php include('footer.php'); ?>
	</body>
</html>
