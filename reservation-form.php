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
    <title>Réservation</title>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/reservation-form.css">
</head>
<body>
<!-- Header -->
<header>
    <?php include("include/header.php") ?>
</header>

<!-- Main -->
<main>
    <form method="POST" action="changement_login.php">
        <label for="name">Titre</label><br>
        <input type="text" id="name" name="name" required
               minlength="4" maxlength="140" size="10"><br>
        <label for="descrip">Description</label><br>
        <input type="text" id="name" name="name" required
               minlength="4" maxlength="255" size="10"><br>
        <label for="date_deb">Date de début</label><br>
        <input type="date" id="start" name="trip-start"
               value="2018-07-22"
               min="2020-01-01" max="2100-12-31"><br>
        <label for="date_fin">Date de fin</label><br>
        <input type="date" id="start" name="trip-start"
               value="2018-07-22"
               min="2020-01-01" max="2100-12-31"><br>
        <input class="input" type="submit" name="submit" value="Valider">
    </form>
</main>
</body>