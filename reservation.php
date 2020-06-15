<?php session_start();
$bdd = mysqli_connect("localhost", "root", "", 'reservationsalles');

if (isset($_GET['submit'])) {

$login = $_GET['login'];
$requete = "SELECT id FROM utilisateurs WHERE login ='".$_SESSION['login']."'";
$query = mysqli_query($bdd, $requete);
$id = mysqli_fetch_all($query);


$requete1 = "SELECT titre, description, FROM reservations";
$query1 = mysqli_query($bdd,$requete1);
$reserv = mysqli_fetch_all($query1);

$requete2 = "";

}

