<?php
  $sexe = $_POST['sexe1'].'</br>';
  $prenom = $_POST['prenom'].'</br>';
  $nom = $_POST['nom'].'</br>';
  $date_naissance = $_POST['date_naissance'].'</br>';
  $mail = $_POST['email'].'</br>';
  ?>

<?php

	// bibliothèques
	try {
        $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
   
    echo 'Insertion en cours ..'.'</br>';
    $bdd->exec('INSERT INTO Client (idClient, sexe, nom, prenom, date_naissance, mail, identifiant, mdp) VALUES (NULL, \''.$sexe.'\' ,\''.$prenom.'\', \''.$nom.'\', \''.$date_naissance.'\', \''.$mail.'\', NULL, NULL)');
    echo 'Votre demande a bien été prise en compte !';
   
?>

<!DOCTYPE html>
<html lang="fr" >

	<head>
	<meta charset="UTF-8">
	<title> Demande réservation </title>
	</head>

	<body>
	Votre demande à bien été soumie, veuillez vérifiez vos mails.
	</body>

</html>
