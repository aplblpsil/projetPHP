<?php

include_once('bdd_connect.php');

$lsQuery = "SELECT i.*, c.nom AS nomCriticite, m.nom AS nomMachine, m.numSerie FROM incident i "
         . "INNER JOIN criticite c ON i.idCriticite = c.id "
         . "INNER JOIN machine m ON i.idMachine = m.id "         
         . "ORDER BY i.dateSignalisation, i.resolu ;"; // <- recuperer l'id de l'user connecté
$bdd->query("SET NAMES UTF8");
$rep = $bdd->query($lsQuery);
$dataTicketUser = $rep->fetchAll();

/*$reqAdmin = "SELECT nom, prenom, id, from utilisateur "
        . "WHERE idFonction= 1;";
$repAdmin = $bdd->query($reqAdmin);
$dataAdmin = $repAdmin->fetchAll();*/

foreach ($dataTicketUser as $unTicket) {
    $idTicket = $unTicket['id'];
    $titre = $unTicket['titre'];
    $resolu = $unTicket['resolu'];
    $dateTicket = $unTicket['dateSignalisation'];
    $description = $unTicket['description'];
    $criticite = $unTicket['nomCriticite'];
    $numMachine = $unTicket['numSerie'];
    $nomMachine = $unTicket['nomMachine'];
    
    $cadreTicket = "<div class='cadrelisteTicket'>"
                      . "<span><span>Objet du problème:</span> $titre</span><br /><br />"
                      . "<span><span>Machine concerné:</span> $numMachine - $nomMachine</span><br /> "
                      . "<span><span>Date de l'incident:</span> $dateTicket</span><br /> "
                      . "<textarea disabled='disabled'>$description</textarea><br /> "
                      . "<span><span>Niveau du problème:</span> $criticite</span> "
                      . "<div>";
                    if($resolu == '1') {
    $cadreTicket .= "<span><img src='../assets/img/ok-button.png' alt='ticket_resolu'></span><br /> Résolu <br />";
                    } else {
    $cadreTicket .= "<span><img src='../assets/img/warning-2.png' alt='ticket_en_cours'></span><br /> En cours de traitement<br />";
                    }
    
    $cadreTicket .= "<span onclick='selection($idTicket);'><img src='../assets/img/logo.png' alt='logo'></span><br />";
    
                    
    $cadreTicket .= "</div>"
                 . "</div>";
    echo "$cadreTicket";
    
   
}

