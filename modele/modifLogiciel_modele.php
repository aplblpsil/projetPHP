<?php

include ('bdd_connect.php');

$idLogiciel = $_GET["idL"];
$sql = "SELECT l.id, l.nom, l.description "
     . "FROM logiciel l "
     . "WHERE l.id = ".$idLogiciel.";";
$bdd->query("SET NAMES UTF8");
$res = $bdd->query($sql);
$dataModifLogiciel = $res->fetch();

$idL = $dataModifLogiciel['id'];
$nomL = $dataModifLogiciel['nom'];
$descriptionL = $dataModifLogiciel['description'];
