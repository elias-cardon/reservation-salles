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
    <form method="POST" action="planning.php">
        <label for="name">Titre</label><br>
        <input type="text" id="name" name="name" required
               minlength="4" maxlength="140" size="10"><br>
        <label for="descrip">Description</label><br>
        <input type="text" id="name" name="name" required
               minlength="4" maxlength="255" size="10"><br>
        <label>Horaire début :</label>
        <input type="date" name="datedeb" required>
        <input type="time" name="timedeb" value="08:00" step="3600" min="08:00" max="18:00"
               required><br>
        <label>Horaire fin :</label>
        <input type="date" name="datefin" required>
        <input type="time" name="timefin" value="09:00" step="3600" min="09:00" max="19:00"
               required><br>
        <input class="input" type="submit" name="submit" value="Valider">
    </form>
</main>
</body>