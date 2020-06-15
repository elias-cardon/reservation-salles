<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
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

$requete = "SELECT * FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateur ";
$query = mysqli_query($bdd, $requete);
$id = mysqli_fetch_all($query);

echo "<div class=\"center\">";
echo "<table>";

echo "<tr>";
echo "<th>" . "Login" . "</th>";
echo "<th>" . "Titre" . "</th>";
echo "<th>" . "Description" . "</th>";
foreach ($id as $value) {
    echo "<tr>";
    echo "<td>" . "$value[2]" . "</td>";
    echo "<td>" . "$value[4]" . "</td>";
    echo "<td>" . "$value[5]" . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>

<style>

    body
    {
        height: 100vh;
    }

    table {
        border-collapse: collapse;
        margin: auto;
    }

    td, th {
        border: 1px solid black;
    }

    .center {
        display: flex;
        align-items: center;
        height: 100%;
    }
</style>







