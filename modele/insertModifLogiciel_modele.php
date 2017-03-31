<?php

include('bdd_connect.php');

$idL = $_POST['idL'];
$nomL = $_POST['ztNom'];
$descriptionL = $_POST['ztDescriptionL'];

if($idL ) {

    $bdd->query("SET NAMES UTF8");
    $sql = "UPDATE logiciel set nom='".$nomL."', description='".$descriptionL."' "
         . "WHERE id=".$idL.";";

    $bdd->exec($sql);

    header('Location: ../control/index.php?pageType=globalLogiciel&edited=true');
} else {
    header('Location: ../control/index.php?pageType=globalLogiciel&edited=error');
}