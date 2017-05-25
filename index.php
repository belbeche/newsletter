<?php include ('header.php') ; ?>
<?php require ('email.php') ;?>

<div id="news">
	<div id="titre">
		<h1>Newsletter</h1>
		<p> <i>Abonnement Newsletter</i> </p>
	</div>
	<div id="form">
		<form action="news.php">
			<input type="text" name="search" placeholder="votre adresse mail">
			<input type="radio"><br/><p>Je veut recevoir la lettre de mon notaire</p>
			<input id="envoyer" type="submit" value="Recevoir la Newsletter">
		</form>
	</div>
</div>
<?php include ('footer.php') ; ?>
