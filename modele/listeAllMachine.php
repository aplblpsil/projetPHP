<?php

include_once("bdd_connect.php");

$sql = "SELECT * FROM machine;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataMachines = $req->fetchAll();

foreach ($dataMachines as $uneMachine) {
    $id = $uneMachine['id'];
    $nomM = $uneMachine['nom'];
    $ldrMachine = "<option value='$id'>$nomM</option>";
    echo "$ldrMachine";
}