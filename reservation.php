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
<main>
    <?php
    $connect = mysqli_connect('localhost','root','', 'reservationsalles');
    $request = "SELECT * FROM reservations WHERE id = '".$_GET['id']."'";
    $query = mysqli_query($connect, $request);
    $result = mysqli_fetch_assoc($query);

    $requestuser = "SELECT login FROM utilisateurs WHERE id = '".$result['id_utilisateur']."'";
    $queryuser = mysqli_query($connect, $requestuser);
    $resultuser = mysqli_fetch_assoc($queryuser);
    ?>
    <div id="reservationdiv">
        <div class="reservationecho"><?php echo $result['titre']; ?></div>
        <div class="reservationecho">Réserver par : <?php echo $resultuser['login']; ?></div>
        <div class="reservationecho">Du : <?php echo $result['debut']; ?></div>
        <div class="reservationecho">Au : <?php echo $result['fin']; ?></div>
        <div class="reservationecho">Description : <br/><?php echo $result['description']; ?></div>
    </div>
</main>
</body>
</html>