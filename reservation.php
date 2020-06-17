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
//A REVOIR

$bdd = mysqli_connect("localhost", "root", "", 'reservationsalles');
//A REVOIR

//RECUP AVEC GET
$id_get = "SELECT id_utilisateur FROM reservations";
$query1 = mysqli_query($bdd, $id_get);
$result1 = mysqli_fetch_assoc($query1);


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
