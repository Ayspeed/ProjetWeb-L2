<?php

// bibliothèques
include('db.inc.php');


// arrivée des données : la page a reçu des données
if ( isset( $_POST ) && count( $_POST ) > 0 )
{
	// arrivée des données : trop ou pas assez de paramètres
	if ( count( $_POST ) != 2 )
		$erreur = 'Erreur dans le nombre de paramètres';
	else	
	// arrivée des données : incomplètes
	if (    ( isset( $_POST['login'] ) && empty( $_POST['login'] ) ) 
	     || ( isset( $_POST['pass']  ) && empty( $_POST['pass']  ) ) )
		$erreur = 'Données incomplètes';
	else	
	// tout est ok
	{
		$login = $_POST['login'];
		$pass  = $_POST['pass']; //password_hash( $_POST['pass'],PASSWORD_BCRYPT );

		// vérifie le login et le mot de passe auprès de la base,
		// renvoie true si ok
		if ( query_login ($login, $pass) )
		{
			session_start();
			$_SESSION['login'] = $login;
			header('Location:membre.php');
			die();
		}
		// pas de réponse : mauvais compte ou mauvais mot de passe
		else
			$erreur = 'Login ou mot de passe erronés';
	}
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf8">
	<title>Accueil</title>
	<link href="style1.css" rel="stylesheet" media="all" type="text/css">
</head>

<body>
<form action="connexion.php" method="post">

<fieldset legend="Connexion à l'espace membre">
<p> Login : 
    <input type="text"
           name="login"
           value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>">
</p>
<p> Mot de passe :
    <input type="password"
           name="pass"
           value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>">
</p>
<input type="submit" value="Connexion">
</fieldset>
</form>

<a href="signin.php">Vous inscrire</a>

<?php
if ( isset( $erreur ) )
	echo '<div id="error">'.$erreur.'</div>';
?>

</body>
</html>
