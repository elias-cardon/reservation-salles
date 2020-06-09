<?php
session_start();
if (isset($_SESSION['login'])) {
	$username = $_SESSION['login'];
	if (isset($_POST['submit'])) {
		$login = $_POST['login'];
		$newlogin = $_POST['newlogin'];
		$repeatnewlogin = $_POST['repeatnewlogin'];
		if ($login && $newlogin && $repeatnewlogin) {
			if ($newlogin == $repeatnewlogin) {
				$db = mysqli_connect('localhost', 'root', '') or die('Erreur');
				mysqli_select_db($db, 'reservationsalles');
				$query = mysqli_query($db, "SELECT * FROM utilisateurs WHERE login = '$username' AND login = '$login'");
				$rows = mysqli_num_rows($query);
				if ($rows==1) {
					$newpass = mysqli_query($db, "UPDATE utilisateurs SET login='$newlogin' WHERE login='$username'");
					die("Votre login a bien été modifié. Vous pouvez vous <a href='connexion.php'>connecter</a>.");
				}
				else
				{
					echo "Votre ancien login est incorrect";
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
	<link rel="stylesheet" href="css/changement_login.css" type="text/css">
</head>
<body>
	<main>
		<fieldset>
			<legend>Changement du mot de passe</legend>
			<form method="POST" action="changement_login.php">
				<p>Votre ancien login</p>
				<input type="text" name="login">
				<p>Votre nouveau login</p>
				<input type="text" name="newlogin">
				<p>Répétez votre nouveau login</p>
				<input type="text" name="repeatnewlogin">
				<input type="submit" value="Changer de login" name="submit">
			</form>
		</fieldset>
		
	</main>
</body>
</html>
