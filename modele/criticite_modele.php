<?php
include_once("bdd_connect.php");

$sql = "SELECT nom FROM criticite;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataCriticite = $req->fetchAll();

foreach ($dataCriticite as $uneCriticite) {
    $nomCrititcite = $uneCriticite['nom'];
    $ldrCriticite = "<option>$nomCrititcite</option>";
    echo "$ldrCriticite";
}