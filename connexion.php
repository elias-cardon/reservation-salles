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
	</head>
	<body class="color">
		<!-- Header -->
			<header id="header">
				<nav><a href="index.php">Accueil</a> | <a href="inscription.php">Inscription</a></nav>
			</header>
			<!-- Main -->
		<main>
			<h1>Connexion</h1>
				<form method="post" action="connexion.php">
        			<p>Login</p>
        			<input class="input" type="text" name="login">
        			<p>Mot de passe</p>
        			<input class="input" type="password" name="password"><br/><br/>
        			<input class="input" type="submit" name="submit" value="Valider"><br/>
				</form>
		</main>
		<!-- Footer -->
			<footer>
			</footer>
	</body> 
</html>

<?php
echo '<style>
h1
{
	text-align : center;
	font-family: "Source Sans Pro", Helvetica, sans-serif;
	text-decoration : underline;
}
p
{
	text-align : center;
	font-family: "Source Sans Pro", Helvetica, sans-serif;
	font-size: 16pt;
	font-weight: 400;
	line-height: 1.75em;
	color : black;
}

.input
{
	display:block;
	margin:auto;
}


form
{
	border : 4mm ridge rgba(170, 50, 220, .6);
}

.color
{
	background-color: #E4E0E0;
}
</style>';
?>