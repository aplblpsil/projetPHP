<?php
include_once("bdd_connect.php");

$sql = "SELECT m.*, m.id AS numMachine, u.nom AS nomUser, u.prenom AS prenomUser "
     . "FROM machine m "
     . "INNER JOIN utilisateur u ON m.idUser = u.id;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataMachine = $req->fetchAll();

foreach ($dataMachine as $uneMachine) {
    $idMachine = $uneMachine['numMachine'];
    $numMachine = $uneMachine['numSerie'];
    $nomMachine = $uneMachine['nom'];
    $formatMachine = $uneMachine['format'];
    $nomUser = $uneMachine['nomUser'];
    $prenomUser = $uneMachine['prenomUser'];
    $listeMachine = "<div class='cadreListe'>"
                        . "<span class='info'><b>Type du terminal</b> ".$formatMachine."</span> "
                        . "<span class='info'><b>Numéro machine</b> ".$numMachine."</span> "
                        . "<span class='info'><b>Nom machine</b> ".$nomMachine."</span> "
                        . "<span class='info'><b>Utilisé par</b> ".$nomUser ."-". $prenomUser."</span> "
                        . "<span class='lien'>"
                            . "<a href='index.php?pageType=modifMachine&idM=".$idMachine."'>"
                            . "<img src='../assets/img/edit.png' alt='editer_machine'/>"
                            . "</a>"
                        . "</span>"
                        . "<span class='lien'>"
                            . "<a href='index.php?pageType=delMachine&idM=$idMachine'>"
                            . "<img src='../assets/img/trash.png' alt='supprimer_machine'/>"
                            . "</a>"
                        . "</span>"
                    . "</div>";
    echo $listeMachine;
}