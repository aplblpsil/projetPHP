<?php
include ("connexionBDD.php");

$sql = "SELECT nom FROM criticite";
$dbh->exec($sql);
$dataCriticite = $dbh->fetch();

$ldrCriticite = "";

while($dataCriticite) {
    
    $nomCrititcite = $dataCriticite['nom'];
    $ldrCriticite.= "<option>$nomCrititcite</option>";
    echo "$ldrCriticite";
    
    $dataCriticite->fetch();
}

