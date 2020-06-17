<?php session_start();

if (isset($_GET["deconnexion"])) {
    session_unset();
    session_destroy();
    header('Location:index.php');
}


?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
    <link rel="stylesheet" href="css/planning.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<!--HEADER-->
<header>
    <?php include('include/header.php') ?>
</header>
<?php
$db = mysqli_connect("localhost", "root", "", "reservationsalles");
$date = "SELECT * FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id";
$query = mysqli_query($db, $date);
$result = mysqli_fetch_all($query);


    //RECUP AVEC GET
    $id_get = "SELECT id FROM reservations";
    $query1 = mysqli_query($db, $id_get);
    $result1 = mysqli_fetch_all($query1);

    ?>

<!--MAIN-->
<main>
    <table>
        <thead>
        <tr>
            <th></th>

            <th>Lundi</th>

            <th>Mardi</th>

            <th>Mercredi</th>

            <th>Jeudi</th>

            <th>Vendredi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($ligne = 8; $ligne <= 19; $ligne++) {
            echo "<tr>";
            echo "<td>" . $ligne . ' h' . "</td>";

            for ($colonnes = 1; $colonnes <= 5; $colonnes++) {
                echo "<td>";
                foreach ($result as $value) {
                    $jour = date("w", strtotime($value[3]));
                    $heure = date("H", strtotime($value[3]));
                    if ($heure == $ligne && $jour == $colonnes) {
                        echo $value[7] . ' ' . $value[1];               //A REVOIR
                        echo "<br/><button><a href=reservation.php?id=".$value[0]. '> Voir</a></button>';
                    }
                }
            }
        }
    echo "</tr>";

        ?>
        </tbody>
    </table>
</main>

</body>
</html>