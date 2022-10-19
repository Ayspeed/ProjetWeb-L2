<?php
function bdconnexion() { 
	$base = new mysqli('localhost', 'root', '', 'projet', 3306);
	$base->set_charset("utf8");
	return $base;
}

function get_salt() {
	return '$2x$14$df5hkt7edlkWz57fgmpqv9$';
}

function query_login($login, $pass) {

	// connexion (à adapter !!)
	$base = bdconnexion();
		
	// on cherche l'entrée correspondant au login
	$sql = 'SELECT pass FROM users WHERE login="'.
	       $base->real_escape_string( $login ).'";';

	// exécution
	$res = $base->query($sql);

	// alors on teste le mot de passe dans le cas où il n'y a qu'une entrée
	$row = $res->fetch_assoc();
		
	//if ( ( $res->num_rows==1 ) && password_verify( $pass, $row['pass'] ) ) // PHP5.5
		
	$salt = get_salt();
	return ( ( $res->num_rows==1 ) && ( crypt( $pass, $salt ) == $row['pass'] ) );
}

function query_count_login($login) {
	
	// connexion (à adapter !!)
	$base = bdconnexion();

	// prépation de la requete n°1 : login dejà pris ?
	$sql = 'SELECT count(*) as num FROM users WHERE login="'.
			   $base->real_escape_string($login).'";';

	// exécution
	$res = $base->query($sql);
	$row = $res->fetch_assoc();
			
	return ( $row['num'] );
}

function query_register_user($login, $pass) {

	// connexion (à adapter !!)
	$base = bdconnexion();
	// préparation de la requete
	$sql = 'INSERT INTO users (login, pass) VALUES("'.
	  	   $base->real_escape_string($login).'", "'.
		   $base->real_escape_string($pass ).'");';
	// exécution
	$base->query($sql);
}


?>
