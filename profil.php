<?php session_start();

if (isset($_POST["deconnexion"])) {
	session_unset();
	session_destroy();
	header('Location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="css/profil.css">
</head>
<body>
	<!-- Header -->
	<header>
		<?php include("include/header.php") ?>
	</header>
	<main>
		<div class="milieu">
			<?php
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
		</div>
		
	</main>
</body>
</html>