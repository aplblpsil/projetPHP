<?php

include_once('bdd_connect.php');

$lsQuery = "SELECT i.*, c.nom AS nomCriticite, m.nom AS nomMachine, m.numSerie FROM incident i "
         . "INNER JOIN criticite c ON i.idCriticite = c.id "
         . "INNER JOIN machine m ON i.idMachine = m.id "
         . "WHERE i.idUser = 2 "
         . "ORDER BY i.dateSignalisation, i.resolu ;"; // <- recuperer l'id de l'user connecté
$bdd->query("SET NAMES UTF8");
$rep = $bdd->query($lsQuery);
$dataTicketUser = $rep->fetchAll();

foreach ($dataTicketUser as $unTicket) {
    $titre = $unTicket['titre'];
    $resolu = $unTicket['resolu'];
    $dateTicket = $unTicket['dateSignalisation'];
    $description = $unTicket['description'];
    $criticite = $unTicket['nomCriticite'];
    $numMachine = $unTicket['numSerie'];
    $nomMachine = $unTicket['nomMachine'];
    
    $cadreTicket = "<div>"
                      . "<span><span>Objet du problème:</span> $titre</span><br /> "
                      . "<span><span>Machine concerné:</span> $numMachine - $nomMachine</span> "
                      . "<span><span>Date de l'incident:</span> $dateTicket</span><br /> "
                      . "<textarea>$description</textarea><br /> "
                      . "<span><span>Niveau du problème:</span> $criticite</span> "
                      . "<div>";
                    if($resolu == '1') {
    $cadreTicket .= "<span><img src='../assets/img/img_404.png' alt=''></span><br /> Résolu ";
                    } else {
    $cadreTicket .= "<span><img src='../assets/img/logo.png' alt=''></span><br /> En cours de traitement";
                    }
    $cadreTicket .= "</div>"
                 . "</div>";
    
    echo "$cadreTicket";
}