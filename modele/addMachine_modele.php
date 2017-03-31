<?php

include('bdd_connect.php');

$user = $_POST['ztAttribution'];
$salle = $_POST['ztSalle'];
$anneeAchat = $_POST['ztDateAchat'];
$format = $_POST['ztFormat'];
$nomMachine = $_POST['ztMachine'];
$numSerie = $_POST['ztNumSerie'];
$os = $_POST['ztOS'];
$fabriquant = $_POST['ztFabriquant'];

if($user && $salle && $anneeAchat && $format && $nomMachine && $numSerie && $os && $fabriquant) {

    $sql = "INSERT INTO machine (id, idUser, idSalle, anneeAchat, format, nom, numSerie, os, fabriquant, actif) "
         . "VALUES('' ,$user, $salle, $anneeAchat, '$format', '$nomMachine', '$numSerie', '$os', '$fabriquant', 1);";

    $bdd->exec($sql);

    header('Location: ../control/index.php?pageType=globalMachine&added=true');

} else {
    header('Location: ../control/index.php?pageType=globalMachine&added=error');
}