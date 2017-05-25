<?php 

	if($_GET['search']) {

		setcookie("email", $_GET['search'], time()+50); /* On crée un cookie qui expirera 50 secondes plus tard pour des raisons de sécurité.*/
	}

?>