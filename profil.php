<?php
session_start();
if ($_SESSION['login']) {
	echo "<p>Bienvenue ".$_SESSION['login']. " ! <br/><br/>

	<a href='changement_mdp.php'>Changer de mot de passe</a><br/>

	<a href='changement_login.php'>Changer de login</a><br/>
	<a href='logout.php'>Se déconnecter</a></p>";
}
else
{
	header("Location:connexion.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body>
	<!-- Header -->
			<header id="header">
				<ul id="lien">
					<li><a href="index.php">Accueil</a></li>
				</ul>
			</header>
			<!-- Footer -->
			<footer id="footer">
			</footer>
</body>
</html>