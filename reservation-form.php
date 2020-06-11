<?php
session_start();

if (isset($_POST["deconnexion"])) {
    session_unset();
    session_destroy();
    header('Location:index.php');
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/reservation-form.css">
</head>
<body>

<!--Header-->
<header>
    <?php include('include/header.php'); ?>
</header>

<!--Main-->
<div class="center-body">
    <form action="#" method="post">

        <?php if (isset($erreur)) {
            echo '<div class="error alert">' . $erreur . "</div>" . "<br />";
        } ?>

        <label for="titre">Titre:</label><br/>
        <input type="text" name="titre"><br/>
        <label for="description">Description:</label><br/>
        <textarea id="description" name="description"></textarea><br/>
        <label for="debut">Début:</label><br/>
        <input type="date" name="debut"><br/>
        <label for="fin">Fin:</label><br/>
        <input type="date" name="fin"><br/><br/>
        <label for="heure">Heure:</label><br/>
        <input type="time" name="heure"><br/><br/>

        <input type="submit" name="submit" value="Réserver">
    </form>
</div>

</body>
</html>
