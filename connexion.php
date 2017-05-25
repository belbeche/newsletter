<?php 
/* Je stoque dans mes 3 variables les informations pour la connexion à la base*/
$dsn = 'mysql:host=db683412430.db.1and1.com;dbname=db683412430';
$utilisateur = 'dbo683412430';
$mdp = 'dubosson123';
/* je test la connexion depuis la variable $bdd la quelle qui init mon objet qui est la connexion*/
try {
	$bdd = new PDO($dsn, $utilisateur, $mdp); 
} catch  (PDOException $e) {
	echo "Une erreur s'est produite lors de la connexion : " . '<strong>' .  $e->getMessage() .'</strong>';
	/* Je récupère les erreur en cas de problèmes et j'affiche l'etat de la connexion*/
}
if (isset($bdd)) {
	echo '<center>'.'Connexion - OK'.'</center>';
}

