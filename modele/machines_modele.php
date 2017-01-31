<?php
include_once("bdd_connect.php");

$sql = "SELECT numSerie, nom FROM machine;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataMachine = $req->fetchAll();

foreach ($dataMachine as $uneMachine) {
    $numMachine = $uneMachine['numSerie'];
    $nomMachine = $uneMachine['nom'];
    $ldrMachine = "<option>$numMachine - $nomMachine</option>";
    
    echo "$ldrMachine";
}