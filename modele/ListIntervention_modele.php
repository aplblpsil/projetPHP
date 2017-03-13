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
        . "ORDER BY intervention.etat ASC, intervention.idPriorite DESC;";
        

$bdd->query("SET NAMES UTF8");
//print_r($lsQuery);
$rep = $bdd->query($lsQuery);
$dataIntervention = $rep->fetchAll();
$cadreInterv ="";

foreach ($dataIntervention as $uneIntervention) {
    
    $idIntervention = $uneIntervention['id'];
    $priorite = $uneIntervention['nomP'];
    $dateInt = $uneIntervention['dateInt'];
    $dateFin = $uneIntervention['dateFin'];
    $msg = $uneIntervention['msg'];
    $salle = $uneIntervention['num'];
    $machine = $uneIntervention['nomM'];
    $etat = $uneIntervention['etat'];    
    
    //test avec les ancienne class car probleme de maj css
    $cadreInterv = "<div class='user'>"            
                      . "<span class='info'> $priorite</span><br /> "
                      . "<span class='info'><span>Date de l'intervention:</span> $dateInt</span><br /> "
                      . "<span class='info'><span>Date de fin:</span> $dateFin</span><br /> "
                      . "<textarea class='info'>$msg</textarea><br /> "
                      . "<span class='info'><span>Numéro de la salle :</span> $salle</span><br /> "
                      . "<span class='info'><span>Numéro de la machine :</span> $machine</span><br /> ";
                    
                    if($etat == 'Terminée') {
    $cadreInterv .= "<span><img src='../assets/img/ok-button.png' alt=''></span><br /> Terminée <br /><br /><br />";
                    } else {
    $cadreInterv .= "<span><img src='../assets/img/warning-2' alt=''></span><br /> En cours de traitement<br /><br /><br />";
                    }
                    
    $cadreInterv .= "<span class='lien'><a href='index.php?pageType=delIntervention&idIntervention=".$idIntervention."'>"
                        . "<img src='../assets/img/trash.png' alt='supprimer_intervention'/>"
                        . "</a></span>";   
                    
    $cadreInterv .= "</div>";
    
    /*$cadreInterv = "<div class='intervention'>"            
                      . "<span class='infoIntervention'> $priorite</span><br /> "
                      . "<span class='infoIntervention'><span>Date de l'intervention:</span> $dateInt</span><br /> "
                      . "<span class='infoIntervention'><span>Date de fin:</span> $dateFin</span><br /> "
                      . "<textarea class='infoIntervention'>$msg</textarea><br /> "
                      . "<span class='infoIntervention'><span>Numéro de la salle :</span> $salle</span><br /> "
                      . "<span class='infoIntervention'><span>Numéro de la machine :</span> $machine</span><br /> "
                    . "</div>";
                    if($etat == 'Terminée') {
    $cadreInterv .= "<span class='infoIntervention'><img src='../assets/img/ok-button.png' alt=''></span><br /> Terminée <br /><br /><br />";
                    } else {
    $cadreInterv .= "<span class='infoIntervention'><img src='../assets/img/warning-2' alt=''></span><br /> En cours de traitement<br /><br /><br />";
                    }*/
    echo $cadreInterv;
    
}
