<?php
include_once("bdd_connect.php");

$sql = "SELECT id, num FROM salle;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataSalle = $req->fetchAll();

foreach ($dataSalle as $uneSalle) {
    $idSalle = $uneSalle['id'];
    $nomSalle = $uneSalle['num'];
    $ldrSalle = "<option value='$idSalle'>$nomSalle</option>";
    echo "$ldrSalle";
}