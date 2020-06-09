<!-- [ russian roulette is not the same without a gun ] -->
<?php ?>
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
    <title>musée guestbook - accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   <header>
    <?php include("includes/header.php")?>
   </header>
		<!-- Header -->
        <?php include('header.php'); ?>

		<!-- Main -->

		<!-- Footer -->
			