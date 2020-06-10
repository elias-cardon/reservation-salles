<?php
session_start();
if(isset($_POST['submit']))
{
	$login = htmlentities(trim($_POST['login']));
	$password = htmlentities(trim($_POST['password']));
	$repeatpassword = htmlentities(trim($_POST['repeatpassword']));

	if($login && $password && $repeatpassword)
	{
		if($password == $repeatpassword)
		{
			$db = mysqli_connect('localhost', 'root', '') or die('Erreur');
			mysqli_select_db($db, 'reservationsalles');

			$query = mysqli_query($db, "INSERT INTO utilisateurs (login, password) VALUES('$login', '$password');");

			die("Inscription terminée. <a href='connexion.php'>Connectez-vous</a>.");
		}
		else
		{
			echo "Les mots de passes doivent être identiques";
		}
	}
	else
	{
		echo "Veuillez saisir tous les champs";
	}
}
?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
	</head>
	<body class="color">
		<!-- Header -->
			<header id="header">
				<nav><a href="index.php">Accueil</a> | <a href="connexion.php">Connexion</a></nav>
			</header>
			<!-- Main -->
		<main>
			<h1>Inscription</h1><br/>
				<form method="post" action="inscription.php">
        			<p>Login</p>
        			<input class="input" type="text" name="login">
        			<p>Mot de passe</p>
        			<input class="input" type="password" name="password">
        			<p>Répétez votre mot de passe</p>
        			<input class="input" type="password" name="repeatpassword"><br><br>
        			<input class="input" type="submit" name="submit" value="Valider">
				</form>
		</main>
		<!-- Footer -->
			<footer id="footer">
			</footer>
	</body> 
</html>