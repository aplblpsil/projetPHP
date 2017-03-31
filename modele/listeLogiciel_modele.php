<?php

include_once("bdd_connect.php");

$sql = "SELECT l.id, l.nom, l.description, l.actif "
     . "FROM logiciel l ;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataLogiciel = $req->fetchAll();

foreach ($dataLogiciel as $unLogiciel) {
    $idL = $unLogiciel['id'];
    $nomL = $unLogiciel['nom'];
    $descriptionL = $unLogiciel['description'];
    $actifL = $unLogiciel['actif'];
    if($actifL == 1){
    $listeLogiciel = "<div class='cadreListe'>"
                        . "<span class='info'><b>Logiciel</b> ".$nomL."</span> "
                        . "<span class='info'><b>Description</b> ".$descriptionL."</span> "
                        . "<span class='lien'>"
                            . "<a href='index.php?pageType=modifLogiciel&idL=".$idL."'>"
                            . "<img src='../assets/img/edit.png' alt='editer_logiciel'/>"
                            . "</a>"
                        . "</span>"
                        . "<span class='lien'>"
                            . "<a href='index.php?pageType=delLogiciel&idL=$idL'>"
                            . "<img src='../assets/img/trash.png' alt='supprimer_logiciel'/>"
                            . "</a>"
                        . "</span>"
                    . "</div>";
    echo $listeLogiciel;
    }
}