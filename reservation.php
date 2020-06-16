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

$requete = "SELECT login,titre,description FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateur WHERE login ='" . $_SESSION['login'] . "' LIMIT 0,1";
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
    echo "<td>" . "$value[0]" . "</td>";
    echo "<td>" . "$value[1]" . "</td>";
    echo "<td>" . "$value[2]" . "</td>";
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
    /*TABLE*/

    table {

        width: 60%;
        background: #dfdddd6b;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid rgba(185, 185, 185, 0.397);

    }

    th {


        padding: 10px;
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
        background-color: rgb(20, 66, 68);


    }

    td {
        text-align: center;
        padding: 10px;
        width: 500px;
        height: 45px;
    }

    td:hover {
        box-shadow: 300px 0 0 0 pink inset;
    }

</style>