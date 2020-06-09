<!-- [ russian roulette is not the same without a gun ] -->
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
	<title> Réservation-Salles-</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<header>
		<?php include("include/header.php") ?>
	</header>
	<main>

	</main>
	<footer>
		<?php include("include/footer.php") ?>
	</footer>
</body>
</html>