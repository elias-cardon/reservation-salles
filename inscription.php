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
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<link rel="stylesheet" href="css/inscription.css" type="text/css">
	</head>
	<body class="color">
		<!-- Header -->
			
			<!-- Main -->
		<main>
			<h1>Inscription</h1><br/>
			<fieldset>
				<form method="post" action="inscription.php">
        			<p>Login</p>
        			<input class="input" type="text" name="login">
        			<p>Mot de passe</p>
        			<input class="input" type="password" name="password">
        			<p>Répétez votre mot de passe</p>
        			<input class="input" type="password" name="repeatpassword"><br><br>
        			<input class="input" type="submit" name="submit" value="Valider">
				</form>
			</fieldset>
		</main>
		<!-- Footer -->
			<footer id="footer">
			</footer>
	</body> 
</html>