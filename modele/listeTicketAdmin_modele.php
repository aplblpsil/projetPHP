<?php
include_once('bdd_connect.php');

$id = $_SESSION['idU'];

$stmt = $bdd->prepare("SELECT priorite.nom AS prioritename, etat, machine.nom AS machinename, dateSignalisation FROM intervention "
        . "INNER JOIN priorite ON idPriorite = priorite.id "
        . "INNER JOIN incident ON intervention.idIncident = incident.id "
        . "INNER JOIN machine ON incident.idMachine = machine.id "
         . "WHERE intervention.idUser=:id AND etat IN('En cours', 'En attente') "
         . "ORDER BY intervention.etat ASC, intervention.idPriorite DESC;"); 
$bdd->query("SET NAMES UTF8");
$stmt->bindValue('id', $id, PDO::PARAM_INT);
$stmt->execute();
$dataInterv = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($dataTicket);
foreach ($dataInterv as $uneInterv) {
    $priorite = $uneInterv['prioritename'];
    $etat = $uneInterv['etat'];
    $nomMachine = $uneInterv['machinename'];
    $dateSignal = $uneInterv['dateSignalisation'];
    switch ($priorite){
        case "Urgente" :
            $couleur = "noir";
            break;
        case "Forte" :
            $couleur = "rouge";
            break;
        case "Faible" : 
            $couleur = "vert";
            break;
        default : 
            $couleur = "vert";
    }
    if($etat == "En attente"){
        $srcImg = "../assets/img/warning-2.png";
    }else{
        $srcImg = "../assets/img/cone.png";
    }
    $cadreInterv = "<a href='#'><div class='cadre".$couleur."'>"
                      . "<span><span>Nom de machine : </span> $nomMachine</span><br /><br />"
                      . "<span><span>Date de l'incident : </span> $dateSignal</span><br /><br /> "
                      . "<span><span>Priorité:</span> $priorite</span><br /><br /><br /> "
                      . "<span class='etat'><img src='".$srcImg."' /></span><br/> <span id='etat'>$etat</span> ";  
    $cadreInterv .= "</div></a>";
    
    echo "$cadreInterv";
}