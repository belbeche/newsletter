
<?php 

/*
Function d'envoi

Premiere fonction : on stock l'information dans l'input search 
Deuxieme fonction : Si la variable est bien renseigné et que ces different de vide , alors on affiche un message avec la varialble qui contient le champ 
*/

$recherche = $_GET['search'];

/* Premiere fonctionnalité stocker l'information de l'input search et on l'affiche */

if (isset($recherche) AND !empty($recherche)) {
	echo "e-mail: ".$recherche;
}

/*Une fois qu'on verifier que l'information n'es pas vide et qu'on as bien une information dans GET et que l'information est pas vide dans recherche on affiche l'information dans la variable recherche*/

if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_GET['search'])) 
		{
?>
<?php 
		}
?> 


<?php 

/*On définit les paramètres de l'e-mail.*/
	
	$email = $_GET['search'];
	$message = array('En attente');
	var_dump($message);

	$destinaire = $email;
	$objet = 'Votre abonnement est bien pris en compte';

	$headers = 'newsletter'. "\r\n";
	$headers .= 'Content-type: text/html, charset=iso-8859-1';
	$headers .= 'Depuis: belbeche.w@gmail.com' . "\r\n";
	if ( mail($destinaire, $objet, $message, $headers)) /*Envoi du mail*/
	{
		echo "<div>"."Votre abonnement est bien en enregistré , un mail vous été envoyer" ."<br/>".'</div>' ;
	}
	else {
		echo "une erreur s'est produite lors de l'envoi du mail";
	}
	
	/*<?php
	else {
		echo 'Votre e-mail  n\'est pas valide ! , Veuillez recommencer !';
	}*/
?>
