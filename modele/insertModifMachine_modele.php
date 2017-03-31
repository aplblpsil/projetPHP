<?php
include('bdd_connect.php');

$idM = $_POST['idM'];
$user = $_POST['ztAttribution'];
$salle = $_POST['ztSalle'];
$anneeAchat = $_POST['ztDateAchat'];
$format = $_POST['ztFormat'];
$nomMachine = $_POST['ztMachine'];
$numSerie = $_POST['ztNumSerie'];
$os = $_POST['ztOS'];
$fabriquant = $_POST['ztFabriquant'];

if($idM && $user && $salle && $anneeAchat && $format && $nomMachine && $numSerie && $os && $fabriquant) {

    $bdd->query("SET NAMES UTF8");

    $sql = "UPDATE machine SET "
         . "idUser=".$user.", idSalle=".$salle.", anneeAchat='".$anneeAchat."',"
         . "format='".$format."', nom='".$nomMachine."', numSerie='".$numSerie."',"
         . "os='".$os."', fabriquant='".$fabriquant."' "
         . "WHERE id=".$idM.";";

    $bdd->exec($sql);

    header('Location: ../control/index.php?pageType=globalMachine&edited=true');
} else {
    header('Location: ../control/index.php?pageType=globalMachine&edited=error');
}