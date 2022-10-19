<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Je veux réserver ?</title>
		<meta charset="UTF-8" />
		<link href="reservation.css" rel= "stylesheet">
		<link href="Menu.css" rel= "stylesheet">
	</head>
	
 	<body>
		<?php include('header.php'); ?>
		
 		<h1> Je veux réserver ? </h1>
		<form method="post" action="recept.php">
		<div>
		
		<fieldset class="gauche">
			<legend>Types de transport :</legend>
 		
		<p>
			<input type="radio" name="quest1" value="1"> Avion</br>
			<input type="radio" name="quest1" value="2"> Bateau</br>
			<input type="radio" name="quest1" value="3"> Train
		</p>
		</fieldset>
		
		<fieldset class="droite">
			<legend>Informations client :</legend>
 		
		<label> Sexe :
		<p>
			<input type="radio" name="sexe1" value="1"> Homme
			<input type="radio" name="sexe2" value="2"> Femme
		</p>
		</label>
		
		<label>
		Nom :
		<input type="text" name="nom">
		</label>
		
		<label>
		Prénom :
		<input type="text" name="prenom">
		</label>
		</br>
		<label>
		Date de naissance :
		<input type="date" name="date_naissance">
		</label>
		</br>
		<label>
		Mail :
		<input type="email" name="email" placeholder="pseudo@mailserver.net" pattern="[a-zA-Z0-9\.-_]{1,}@[a-zA-Z0-9\.-_]{1,}" >
		</label>
		
		</fieldset>
		
 		<fieldset>
 			<legend>Type de voyage :</legend>
 		<p>
 			<input type="radio" name="quest2" value="1"> Aller Simple
 			<input type="radio" name="quest2" value="2"> Aller Retour
			</br>
			</br>
			<label> Ville de départ :
			<select name="ville_dep">
			<option value="paris">Paris</option>
			<option value="lille">Lille</option>
			<option value="nantes">Nantes</option>
			<option value="lyon">Lyon</option>
			<option value="marseille">Marseille</option>
			</select></label>

 			<label> Ville d'arrivée :
			<select name="ville_dep">
			<option value="lisbonne">Lisbonne</option>
			<option value="toronto">Toronto</option>
			<option value="new york">New York</option>
			<option value="vancouver">Vancouver</option>
			<option value="istanbul">Istanbul</option>
			<option value="tunis">Tunis</option>
			<option value="zurich">Zurich</option>
			<option value="londres">Londres</option>
			<option value="amsterdam">Amsterdam</option>
			<option value="alger">Alger</option>
			</select></label>

			</br>
			<label> Date de départ <input type="date" name="date_dep" ></label>
			<label> Date d'arrivée <input type="date" name="date_arr" ></label>
 		</p>
		</br>
		<p>
			<b> Quantité : </b><input type=number name=data value="" min="0" max="3" step="1">
		</p>
		
		<input type="reset" value="Supprimer">
		
		<p class="note"> (Note : Veillez à choisir un voyage existant, dans le cas contraire votre demande ne pourra aboutir.) </p>
		</fieldset>
		
		</div>
 		<fieldset>
		<p>
		<b> Options supplémentaires :</b>
		</br>
				</br>Hébergement: </b> <input type=number name=hebergement value="" min="0" max="3" step="1">
				<p class="note"> (Note : Nos hébergements s'élèvent à un tarif de 30€ par unité.) </p>
				</br>Guide: </b><input type=number name=guide value="" min="0" max="3" step="1">
				<p class="note"> (Note : Le prix d'un guide est de 20€ par unité.) </p>
		</p>
		</fieldset>
		
		<div class="divers">
		<p> Pour toute demande spécifique, veuillez utiliser ce formulaire </p>
		<textarea name="description" rows="7" cols="70"></textarea></br>
		</div>
		
		<input type="submit" name="envoyer" id="bouton" value ="Soummetre ma demande">
		</form>
		
		<input type="button" name="paiement" id="bouton1" value="Payer" onclick="self.location.href='paiement.php'">
 		
 		<?php include('footer.php'); ?>
		
	</body>
</html>