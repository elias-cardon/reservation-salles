<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reservation.css">
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

$bdd = mysqli_connect("localhost", "root", "", 'reservationsalles');
    
$myId = $_GET['id'];
//RECUP AVEC GET
$db = mysqli_connect("localhost", "root", "", "reservationsalles");
$date = "SELECT login, titre, description, debut, fin FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id =$myId";
$query = mysqli_query($db, $date);
$result = mysqli_fetch_all($query);


echo "<div class=\"center\">";

echo "<table>";

echo "<tr>";
echo "<th>" . "Login" . "</th>";
echo "<th>" . "Titre" . "</th>";
echo "<th>" . "Description" . "</th>";
echo "<th>" . "Début" . "</th>";
echo "<th>" . "Fin" . "</th>";

foreach ($result as $value) {
    echo "<tr>";
    echo "<td>" . "$value[0]" . "</td>";
    echo "<td>" . "$value[1]" . "</td>";
    echo "<td>" . "$value[2]" . "</td>";
    echo "<td>" . "$value[3]" . "</td>";
    echo "<td>" . "$value[4]" . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
