<?php session_start();
$bdd = mysqli_connect("localhost", "root", "", 'reservationsalles');

//if (isset($_GET['submit'])) {

//$login = $_GET['login'];
$requete = "SELECT * FROM utilisateurs INNER JOIN reservations ON utilisateurs.id = reservations.id_utilisateur ";
$query = mysqli_query($bdd, $requete);
$id = mysqli_fetch_all($query);

echo "<div class=\"center\">";
echo "<table>";

echo "<tr>";
    echo "<th>"."Login"."</th>";
    echo "<th>"."Titre"."</th>";
    echo "<th>"."Description"."</th>";
foreach($id as $value){
    echo "<tr>";
        echo "<td>"."$value[2]"."</td>";
        echo "<td>"."$value[4]"."</td>";
        echo "<td>"."$value[5]"."</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>

<style>

    table{
        border-collapse:collapse;
        margin: auto;
    }

    td, th{
    border:1px solid black;
}
    .center{
        display: flex;
        align-items: center;
        height: 100%;
    }
</style>







