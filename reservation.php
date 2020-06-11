<?php
session_start();
//Connection à la bdd
try {
    $config = new PDO('mysql:host=localhost;dbname=reservationsalles;charset=utf8', 'root', '');
    $req = $config->query('SELECT u.login, r.titre, r.description, r.debut, r.fin 
                           FROM reservations AS r
                           INNER JOIN utilisateurs AS u
                           ON r.id_utilisateur = u.id');
}catch(PDOexception $e){
    $erreur = "Erreur: ".$e->getMessage();
}

