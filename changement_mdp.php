<?php
session_start();
if (isset($_SESSION['login'])) {
	$username = $_SESSION['login'];
	if (isset($_POST['submit'])) {
		$password = $_POST['password'];
		$newpassword = $_POST['newpassword'];
		$repeatnewpassword = $_POST['repeatnewpassword'];
		if ($password && $newpassword && $repeatnewpassword) {
			if ($newpassword == $repeatnewpassword) {
				$db = mysqli_connect('localhost', 'root', '') or die('Erreur');
				mysqli_select_db($db, 'livreor');
				$query = mysqli_query($db, "SELECT * FROM utilisateurs WHERE login = '$username' AND password = '$password'");
				$rows = mysqli_num_rows($query);
				if ($rows==1) {
					$newpass = mysqli_query($db, "UPDATE utilisateurs SET password='$newpassword' WHERE login='$username'");
					die("Votre mot de passe a bien été modifié. Vous pouvez vous <a href='connexion.php'>connecter</a>.");
				}
				else
				{
					echo "Votre ancien mot de passe est incorrect";
				}
			}
			else
				{echo "Les deux champs doivent être identiques";}
		
		}
		else
		{
			echo "Veuillez saisir tous les champs";
		}
	}
}
else
{
	header("Location:connexion.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Changement de login</title>
	<link rel="stylesheet" href="css/changement_mdp.css" type="text/css">
</head>
<body>
	<!-- Header -->
			<header>
			</header>
	<!-- Main -->
	<main>
		<fieldset>
			<legend>Changement du mot de passe</legend>
			<form method="POST" action="changement_mdp.php">
				<p>Votre ancien mot de passe</p>
				<input type="password" name="password">
				<p>Votre nouveau mot de passe</p>
				<input type="password" name="newpassword">
				<p>Répétez votre nouveau mot de passe</p>
				<input type="password" name="repeatnewpassword">
				<input type="submit" name="Changer de mot de passe">
			</form>
		</fieldset>
	</main>
			<!-- Footer -->
			<footer>
			</footer>
</body>
</html>
