<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=reservationsalles;charset=utf8', 'root', '' );

if (isset($_POST['submit'])) {

    //Variables
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $debut = htmlspecialchars($_POST['date-debut']). " ".$_POST['heure-debut'];
    $fin = htmlspecialchars($_POST['date-fin']). " ".$_POST['heure-fin'];
    

    $requete = $bdd->query("SELECT id FROM utilisateurs WHERE login ='".$_SESSION['login']."'");//concatenation no comprendo
    $id = $requete->fetchAll();
    $id_utilisateur = $id[0][0]; //c'est comment 

    $requete2 = $bdd->query("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$debut', '$fin', $id_utilisateur)");

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

        <label for="titre">Titre:</label><br/>
        <input type="text" name="titre"><br/>
        <label for="description">Description:</label><br/>
        <textarea id="description" name="description"></textarea><br/>
        <label for="debut">Début:</label><br/>
        <input type="date" name="date-debut"><br/>
        <label for="fin">Fin:</label><br/>
        <input type="date" name="date-fin"><br/><br/>
        <label for="heure">Heure:</label><br/>
        <input type="time" name="heure-debut"><br/><br/>
        <label for="heure">Heure:</label><br/>
        <input type="time" name="heure-fin"><br/><br/>

        <input type="submit" name="submit" value="Réserver">
    </form>
</div>

</body>
</html>
