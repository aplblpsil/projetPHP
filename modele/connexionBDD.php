<?php
// Définition des variables de connexion
    $user = "root";
    $pass = "";
    $dsn ='mysql:host=localhost;dbname="lpsil_bdgestionparc"'; //Data Source Name

    // Connexion 
    try {
        $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT=>true));  // Connexion persistante
        $dbh->exec("SET CHARACTER SET utf8"); // Encodage
    }
    catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }