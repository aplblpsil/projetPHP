<?php
include_once('bdd_connect.php');

//$idUser = $_SESSION['idU'];
//
//$lsQuery ="";
//$bdd->query("SET NAMES UTF8");
//$rep = $bdd->query($lsQuery);
//$dataTicketUser = $rep->fetchAll();
//
//
//    $titre = $unTicket['titre'];
//    $resolu = $unTicket['resolu'];
//    $dateTicket = $unTicket['dateSignalisation'];
//    $description = $unTicket['description'];
//    $criticite = $unTicket['nomCriticite'];
//    $numMachine = $unTicket['numSerie'];
//    $nomMachine = $unTicket['nomMachine'];
//    
//    $cadreTicket = "<div>"
//                      . "<span><span>Objet du problème:</span> $titre</span><br /><br />"
//                      . "<span><span>Machine concerné:</span> $numMachine - $nomMachine</span><br /> "
//                      . "<span><span>Date de l'incident:</span> $dateTicket</span><br /> "
//                      . "<textarea disabled='disabled'>$description</textarea><br /> "
//                      . "<span><span>Niveau du problème:</span> $criticite</span> "
//                      . "<div>";
//             
//    
//    echo "$cadreTicket";
//
