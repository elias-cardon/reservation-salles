<?php
session_start();
if (isset($_POST['submit'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	if ($login && $password) {
		$db = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($db, 'reservationsalles');

		$query = mysqli_query($db, "SELECT * FROM utilisateurs WHERE login='$login' && password='$password'");
		$rows = mysqli_num_rows($query);
		if ($rows==1) {
			$_SESSION['login'] = $login;
			header('Location:profil.php');
		}
		else
		{
			echo "Login ou password incorrect";
		}
	}

	else
	{
		echo "Veuillez saisir tous les champs.";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
		<link rel="stylesheet" href="css/connexion.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body class="color">
		<!-- Header -->
			<?php include('include/header.php'); ?>
			<!-- Main -->
		<main>
			<fieldset>
			<legend>Connexion</legend>
				<form method="post" action="connexion.php">
        			<label for="login">Login</label>
        			<input class="input" type="text" name="login" autocomplete="on" placeholder="Entrez votre login" title="Login">
        			<label for="password">Mot de passe</label>
					<input class="input" type="password" name="password" autocomplete="on" placeholder="Entrez votre mdp" title="mot de passe"><br/><br/>
					<div class="center">
					<input class="input" type="submit" name="submit" value="Valider"><br/>
					</div>
				</form>
			</fieldset>
		</main>
		<!-- Footer -->
			
	</body> 
</html>