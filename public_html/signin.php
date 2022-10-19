<?php

// bibliothèques
include('db.inc.php');

// arrivée des données : la page a reçu des données
if ( isset( $_POST ) && count( $_POST ) > 0 )
{
	// arrivée des données : trop ou pas assez de paramètres
	if ( count( $_POST ) != 3 )
		$erreur = 'Erreur dans le nombre de paramètres';
	else	
	// arrivée des données : incomplètes
	if (    ( isset( $_POST['login'] ) && empty( $_POST['login'] ) ) 
	     || ( isset( $_POST['pass1'] ) && empty( $_POST['pass1']  ) )
	     || ( isset( $_POST['pass2'] ) && empty( $_POST['pass2']  ) ) )
		$erreur = 'Données incomplètes';
	else	
	// tout est ok
	{
		// on teste les deux mots de passe
		if ( $_POST['pass1'] != $_POST['pass2'] )
		{
			$erreur = 'Les 2 mots de passe sont différents.';
		}
		else {

			$login = $_POST['login'];
			// $pass  = password_hash( $_POST['pass1'],PASSWORD_DEFAULT); // PHP5.5
			$salt = get_salt();
			$pass = crypt($_POST['pass1'], $salt);

			$numrecord = query_count_login($login);
			
			if ( $numrecord  == 0 ) {
			
				query_register_user($login, $pass);

				// on connecte l'utilisateur en le mettant en session
				session_start();
				$_SESSION['login'] = $_POST['login'];
				header('Location:membre.php');
				die();
			}
			else {
				$erreur = 'Un membre possède déjà ce login.';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf8">
	<title>Inscription</title>
	<link href="style1.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
	<h2>Bienvenue parmi nous, prenez plaisir à découvrir notre compagnie !</h2>

	<form action="signin.php" method="post">
	</br>
	<p>
	Login :
	<input type="text"
	       name="login"
	       value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>">
	</p>
	
	<p>
	Mot de passe :
	<input type="password"
	       name="pass1"
	       value="<?php if (isset($_POST['pass1'])) echo htmlentities(trim($_POST['pass1'])); ?>">
	</p>
	
	<p>
	Confirmation du mot de passe :
	<input type="password"
	       name="pass2"
	       value="<?php if (isset($_POST['pass2'])) echo htmlentities(trim($_POST['pass2'])); ?>">
    </p>

	<input type="submit" value="Inscription">
</form>

<?php
if ( isset( $erreur ) )
	echo '<div id="error">'.$erreur.'</div>';
?>

</body>
</html>

