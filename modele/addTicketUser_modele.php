<?php

include_once ("bdd_connect.php");

// on récupère les champs que l'user aura rempli
$titre = $_REQUEST['ztTitre'];
$date = $_REQUEST['ztDate'];
$description = $_REQUEST['ztDescription'];
$machine = $_REQUEST['ldrMachine'];
$criticite = $_REQUEST['ldrCriticite'];
//$idU = $_SESSION['idUser'];

//convertion de la date en format EN:
$dateConvertion = new DateTime($date);
$dateTicket = $dateConvertion->format('Y-m-d');

// on verifie les champs != vide et ayant un format valide
    // condition et preg_replace ...


// on créé le ticket si tout est OK
    // Inscription
    $sql = "INSERT INTO incident(titre,resolu,dateSignalisation,description,idCriticite,idMachine,idUser) "
            . "VALUES ('".$titre."',0, '".$dateTicket."','".$description."',".$criticite.",".$machine.""
            . ",2);";
    $bdd->query($sql);
    
    header("location: ../control/index.php?pageType=viewTicketU&access=Salarié&ac=added");

?>