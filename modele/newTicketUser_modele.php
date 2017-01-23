<?php

include_once ("bdd...");


// on s'assure que c'est un user de la BDD 
    // requete sql ....

// on récupère les champs que l'user aura rempli
$titre = $_REQUEST['ztTitre'];
$dateTicket = $_REQUEST['ztDate'];
$description = $_REQUEST['ztDescription'];
$machine = $_REQUEST['ldrMachine'];
$criticite = $_REQUEST['ldrCriticite'];

// on verifie les champs != vide et ayant un format valide
    // condition et preg_replace ...


// on créé le ticket si tout est OK
    // requete sql... 

?>