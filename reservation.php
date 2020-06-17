<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/reservation.css">

</head>
<body>
<!--HEADER-->
<header>
    <?php include('include/header.php') ?>
</header>
</body>
</html>
<?php
$id=$_SESSION['id'];
$requete= "SELECT * FROM  reservations WHERE id ='$id'";
$query=mysqli_query($bdd,$requete);
$result=mysqli_fetch_array($query);

$login=$result['id_utilisateur'];
$requete2="SELECT login from utilisateurs where id='$login'";
$query2=mysqli_query($bdd,$requete2);
$result2=mysqli_fetch_array($query2);
?>

<form method="post">
    <label>Login :</label>
    <input disabled="disabled" type="text" name="login" value="<?php echo $result2['login'];?>">
    <label>Titre :</label>
    <input disabled="disabled" required type="text" name="titre" value="<?php  echo $result['titre']; ?>">
    <label>Description :</label>
    <textarea disabled="disabled" name="description"><?php  echo $result['description']; ?></textarea>
    <label>Début :</label>
    <input disabled="disabled" required name="datedebut" type="datetime-local" id="meeting-time" value="<?php echo SUBSTR($result['debut'], 0, 10)?>T<?php echo SUBSTR($result['debut'], 11, 8); ?>">
    <label>Fin :</label>
    <input disabled="disabled" required name="datefin" type="datetime-local" id="meeting-time" value="<?php echo SUBSTR($result['fin'], 0, 10)?>T<?php echo SUBSTR($result['fin'], 11, 8); ?>">
    <?php if($_SESSION['login']=="admin" || $_SESSION['login']==$result2['login'])
    {
        ?>
        <input type="submit" name="effacer" value="Supprimer">
        <?php
    }
    ?>
</form>
