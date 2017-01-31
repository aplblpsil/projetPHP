<?php
include_once("bdd_connect.php");

$sql = "SELECT * FROM criticite;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataCriticite = $req->fetchAll();

foreach ($dataCriticite as $uneCriticite) {
    $idCriticite = $uneCriticite['id'];
    $nomCrititcite = $uneCriticite['nom'];
    $ldrCriticite = "<option value='$idCriticite'>$nomCrititcite</option>";
    echo "$ldrCriticite";
}