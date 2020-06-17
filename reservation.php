<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/reservation.css">
    <link rel="stylesheet" href="css/index.css">

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

$requete = "SELECT login,titre,description,debut,fin FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateur WHERE login ='" . $_SESSION['login'] . "' LIMIT 0,1";
$query = mysqli_query($bdd, $requete);
$id = mysqli_fetch_all($query);
$id_reservation = $_GET['id'];

echo "<div class=\"center\">";

echo "<table>";

echo "<tr>";
echo "<th>" . "Login" . "</th>";
echo "<th>" . "Titre" . "</th>";
echo "<th>" . "Description" . "</th>";
echo "<th>" . "Début" . "</th>";
echo "<th>" . "Fin" . "</th>";

foreach ($id as $value) {
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