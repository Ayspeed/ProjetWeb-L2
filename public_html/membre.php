<?php
@session_start();
if (!isset($_SESSION['login'])) {
	header ('Location:connexion.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf8">
	<title>Espace membre</title>
	<link href="membre.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
	<p>
	Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !
	</p>
	
	<p> Vous pouvez <a href="ajout.php"> ici</a> ajouter un service à travers cette page disponible pour les professionnels.</p>
	
	
	<p> Si tu veux changer de login, <a href="signin.php">clique ici</a> pour revenir à la page d'inscription </p>
	<a href="logout.php">Déconnexion</a>
	
	<?php include('footer.php'); ?>
</body>
</html>
