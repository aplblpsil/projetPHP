<?php
include_once("bdd_connect.php");

$sql = "SELECT id, numSerie, nom FROM machine;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataMachine = $req->fetchAll();

foreach ($dataMachine as $uneMachine) {
    $idMachine = $uneMachine['id'];
    $numMachine = $uneMachine['numSerie'];
    $nomMachine = $uneMachine['nom'];
    $ldrMachine = "<option value='$idMachine'>$numMachine - $nomMachine</option>";
    
    echo "$ldrMachine";
}