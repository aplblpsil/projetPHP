<?php
include_once('bdd_connect.php');

$id = $_SESSION['idU'];

$stmt = $bdd->prepare("SELECT i.*, c.nom AS nomCriticite, m.nom AS nomMachine, m.numSerie, priorite.nom AS nomPriorite FROM incident i "
         . "INNER JOIN criticite c ON i.idCriticite = c.id "
         . "INNER JOIN machine m ON i.idMachine = m.id "
         . "INNER JOIN intervention ON i.id = intervention.idIncident "
         . "INNER JOIN priorite ON intervention.idPriorite = priorite.id "
         . "WHERE intervention.idUser=:id AND etat='En cours' "
         . "ORDER BY i.dateSignalisation ASC, idPriorite DESC ;"); 
$bdd->query("SET NAMES UTF8");
$stmt->bindValue('id', $id, PDO::PARAM_INT);
$stmt->execute();
$dataTicket = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($dataTicket);
foreach ($dataTicket as $unTicket) {
    $titre = $unTicket['titre'];
    $resolu = $unTicket['resolu'];
    $dateTicket = $unTicket['dateSignalisation'];
    $description = $unTicket['description'];
    $criticite = $unTicket['nomCriticite'];
    $numMachine = $unTicket['numSerie'];
    $nomMachine = $unTicket['nomMachine'];
    
    $cadreTicket = "<div>"
                      . "<span><span>Objet du problème:</span> $titre</span><br /><br />"
                      . "<span><span>Machine concerné:</span> $numMachine - $nomMachine</span><br /> "
                      . "<span><span>Date de l'incident:</span> $dateTicket</span><br /> "
                      . "<textarea disabled='disabled'>$description</textarea><br /> "
                      . "<span><span>Niveau du problème:</span> $criticite</span> "
                      . "<div>";
                    if($resolu == '1') {
    $cadreTicket .= "<span><img src='../assets/img/ok-button.png' alt='ticket_resolu'></span><br /> Résolu ";
                    } else {
    $cadreTicket .= "<span><img src='../assets/img/warning-2.png' alt='ticket_en_cours'></span><br /> En cours de traitement";
                    }
    $cadreTicket .= "</div>"
                 . "</div>";
    
    echo "$cadreTicket";
}