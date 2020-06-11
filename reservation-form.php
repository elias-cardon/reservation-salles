<?php
session_start();


//Verifier si le formulaire est bien envoyer et remplie

if (isset($_POST['submit'])) {

    //Variables
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $debut = date_create(htmlspecialchars($_POST['debut']));
    $date_debut = date_format($debut, 'Y-m-d');
    $fin = date_create(htmlspecialchars($_POST['fin']));
    $date_fin = date_format($fin, 'Y-m-d');
    $heure = date_create(htmlspecialchars($_POST['heure']));
    $date_heure = date_format($heure, 'H:i:s');
    $id_utilisateur = null;
    $erreur = null;
    $secureErreur = htmlspecialchars($erreur);


    if (!empty($titre) && !empty($description) && !empty($debut) && !empty($fin)) {

        //Se co à la bdd, préparer la requête d'insertion et l'executer
        try {
            $config = new PDO('mysql:host=localhost;dbname=reservationsalles;charset=utf8', 'root', '');
            $req = $config->query('INSERT INTO reservations(titre, description, debut, fin,id_utilisateur)
                                     VALUES($titre, $description, $date_debut, $date_fin, $id_utilisateur++)');
            $erreur = "Vous êtes bien ici";
        }catch(PDOexception $e){
            $erreur = "Erreur: ".$e->getMessage();
        }

    } else {
        $erreur = "Veuillez remplir tous les champs.";
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
    <?php include('include/header.php');?>
    </header>

     <!--Main-->
     <div class="center-body">
    <form action="#" method="post">

    <?php if(isset($erreur)){
        echo '<div class="error alert">'.$erreur."</div>"."<br />";
    }?>

    <label for="titre">Titre:</label><br />
        <input type="text" name="titre"><br />
    <label for="description">Description:</label><br />
        <textarea id="description" name="description" ></textarea><br />
    <label for="debut">Début:</label><br />
        <input type="date" name="debut"><br />
    <label for="fin">Fin:</label><br />
        <input type="date" name="fin"><br /><br />
    <label for="heure">Heure:</label><br />
        <input type="time" name="heure"><br /><br />

    <input type="submit" name="submit" value="Réserver">
    </form>
    </div>
    
</body>
</html>
