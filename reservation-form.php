<?php
session_start();
$bdd = mysqli_connect("localhost", "root", "", 'reservationsalles');

if (isset($_POST['submit'])) {

    //Variables
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $debut = htmlspecialchars($_POST['date-debut']). " ".$_POST['heure-debut'];
    $fin = htmlspecialchars($_POST['date-fin']). " ".$_POST['heure-fin'];

    //N'AUTORISER QU'UNE HEURE MAX DE RESERVATION

    //INSERER RESERVATION DANS BDD
    $requete = "SELECT id FROM utilisateurs WHERE login ='" . $_SESSION['login'] . "'";
    $query = mysqli_query($bdd, $requete);
    $id = mysqli_fetch_all($query);
    $id_utilisateur = $id[0][0];

    $requete2 = "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$debut', '$fin', $id_utilisateur)";
    $query1 = mysqli_query($bdd, $requete2);

    //VERIFIER SI LA PLAGE HORAIRE ESt DISPONIBLE
    $requete3 = "SELECT * FROM reservations WHERE reservations.id_utilisateur = 1";
    $query2 = mysqli_query($bdd, $requete3);
    $id_utilisateur1 = mysqli_num_rows($query2);

    if($id_utilisateur1 == 1){
        header('location:reservation-form.php');
        echo   "La plage horaire selectionnée n'est pas disponible.";
    }




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

        <label for="titre">Titre:</label><br />
        <input type="text" name="titre"><br />
        <label for="description">Description:</label><br />
        <textarea id="description" name="description"></textarea><br />
        <label for="debut">Début:</label><br />
        <input type="date" name="date-debut"><br />
        <label for="fin">Fin:</label><br />
        <input type="date" name="date-fin"><br /><br />
        <label for="heure">Heure:</label><br />
        <input type="time" name="heure-debut"><br /><br />
        <label for="heure">Heure:</label><br />
        <input type="time" name="heure-fin"><br /><br />

        <input type="submit" name="submit" value="Réserver">
    </form>
</div>

</body>

</html>