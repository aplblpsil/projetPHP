<?php

include ('bdd_connect.php');

/*
SELECT intervention.*,machine.nom AS nomM,salle.num,priorite.nom as nomP FROM intervention
INNER JOIN priorite ON intervention.idPriorite = priorite.id 
INNER JOIN incident ON intervention.idIncident = incident.id
INNER JOIN machine ON incident.idMachine = machine.id
INNER JOIN salle ON machine.idSalle = salle.id
ORDER BY intervention.idPriorite DESC;
*/
$lsQuery = "SELECT intervention.*,machine.nom AS nomM,salle.num,priorite.nom as nomP FROM intervention "
        . "INNER JOIN priorite ON intervention.idPriorite = priorite.id  "
        . "INNER JOIN incident ON intervention.idIncident = incident.id "
        . "INNER JOIN machine ON incident.idMachine = machine.id "
        . "INNER JOIN salle ON machine.idSalle = salle.id "
        . "ORDER BY intervention.idPriorite DESC;";
        

$bdd->query("SET NAMES UTF8");
//print_r($lsQuery);
$rep = $bdd->query($lsQuery);
$dataIntervention = $rep->fetchAll();
$cadreInterv ="";

foreach ($dataIntervention as $uneIntervention) {
    
    $priorite = $uneIntervention['nomP'];
    $dateInt = $uneIntervention['dateInt'];
    $dateFin = $uneIntervention['dateFin'];
    $msg = $uneIntervention['msg'];
    $salle = $uneIntervention['num'];
    $machine = $uneIntervention['nomM'];
    $etat = $uneIntervention['etat'];    
    
    $cadreInterv .= "<div>"            
                      . "<span> $priorite</span><br /> "
                      . "<span><span>Date de l'intervention:</span> $dateInt</span><br /> "
                      . "<span><span>Date de fin:</span> $dateFin</span><br /> "
                      . "<textarea>$msg</textarea><br /> "
                      . "<span><span>Numéro de la salle :</span> $salle</span> "
                      . "<span><span>Numéro de la machine :</span> $machine</span> "
                    . "</div>";
                    if($etat == 'Terminée') {
    $cadreInterv .= "<span><img src='../assets/img/ok-button.png' alt=''></span><br /> Résolu ";
                    } else {
    $cadreInterv .= "<span><img src='../assets/img/warning-2' alt=''></span><br /> En cours de traitement";
                    }
    echo $cadreInterv;
    
}
