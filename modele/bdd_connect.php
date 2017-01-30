<?php

// Information de connexion

$bdName = "lpsil_bdgestionparc";
$host = "127.0.0.1";
$login = "root";
$mdp = "";

// Connexion à la BDD

try {
    $bdd = new PDO('mysql:host='.$host.';dbname='.$bdName, $login, $mdp);
} catch (Exception $e) {
    die('Erreur : l application n a pas pu se connecter a la BDD' . $e->getMessage());
}
return $bdd;

?>