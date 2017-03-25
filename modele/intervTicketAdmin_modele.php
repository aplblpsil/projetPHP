<?php
include_once('bdd_connect.php');

$idInt = $_GET['idInt'];
$idTicket = $_GET['idTicket'];

$stmt = $bdd->prepare("SELECT incident.titre AS titreTicket, resolu, dateSignalisation, description, "
        . "dateInt, criticite.nom AS nomCriticite, dateFin, numSerie, machine.nom AS nomMachine "
        . ", intervention.etat AS etatInt FROM intervention "
        . "INNER JOIN incident ON intervention.idIncident = incident.id "
        . "INNER JOIN criticite ON incident.idCriticite = criticite.id "
        . "INNER JOIN machine ON incident.idMachine = machine.id "
         . "WHERE intervention.id=:idInt AND incident.id=:idTicket;"); 
$bdd->query("SET NAMES UTF8");

$stmt->bindValue('idInt', $idInt, PDO::PARAM_INT);
$stmt->bindValue('idTicket', $idTicket, PDO::PARAM_INT);
$stmt->execute();
$dataTicket = $stmt->fetch(PDO::FETCH_ASSOC);

$titre = $dataTicket['titreTicket'];
$resolu = $dataTicket['resolu'];
$dateTicket = $dataTicket['dateSignalisation'];
$description = $dataTicket['description'];
$criticite = $dataTicket['nomCriticite'];
$numMachine = $dataTicket['numSerie'];
$nomMachine = $dataTicket['nomMachine'];
$etatInt = $dataTicket['etatInt'];
$dateInt = $dataTicket['dateInt'];
$dateFin = $dataTicket['dateFin'];
 
    $cadreTicket = "<div >"
                      . "<span><span>Objet du problème:</span> $titre</span><br /><br />"
                      . "<span><span>Machine concerné:</span> $numMachine - $nomMachine</span><br /> "
                      . "<span><span>Date de l'incident:</span> $dateTicket</span><br /> "
                      . "<textarea disabled='disabled'>$description</textarea><br /> "
                      . "<span><span>Niveau du problème:</span> $criticite</span> "
                      . "</div>";
    if($etatInt == 'En attente'){
        $cadreTicket .= "<a href='index.php?pageType=updateInterv&idTicket=".$idTicket."&idInt=".$idInt."'><button class='btSubmit'>J'interviens !</button></a>";
    }else{
        $cadreTicket .= "<div><form name='form_int' method='POST' action='../modele/finIntervention_modele.php'>"
                . "<legend>Rapport d'intervention</legend><br/><br/>"
                . "<label for='msg'>Message d'intervention :</label>"
                . "<textarea name='msg' placeholder='tapez votre message ici..' required='required'></textarea><br /> "
                . "<label for='dateFin'>Date de fin d'intervention :</label><br/>"
                . "<input type='text' placeholder='jj/mm/aaaa' name='dateFin' required='required'/><br /><br/>"
                . "<input name='submitInt' type='submit' value='Fin d&apos;intervention' class='btSubmit'/>"
                . "<input type='text' value='".$_GET['idInt']."' hidden='true' name='idInt'/>"
                . "<input type='text' value='".$_GET['idTicket']."' hidden='true' name='idTicket'/>"
                . "</form></div>";
    }      
    
    echo "$cadreTicket";

