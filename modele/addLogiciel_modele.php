<?php

include('bdd_connect.php');

$nomL = $_POST['ztNom'];
$descriptionL = $_POST['ztDescription'];

if($nomL && $descriptionL) {

    $sql = "INSERT INTO logiciel (id, nom, description, actif) "
         . "VALUES('' ,'$nomL', '$descriptionL', 1);";

    $bdd->exec($sql);

    header('Location: ../control/index.php?pageType=globalLogiciel&added=true');

} else {
    header('Location: ../control/index.php?pageType=globalLogiciel&added=error');
}