<?php

include ('bdd_connect.php');
$idMachine = $_GET["idM"];
$sql = "SELECT m.id AS idM, m.nom AS nomM, m.fabriquant, m.numSerie, m.os, m.anneeAchat, m.format, "
     . "s.num, u.id AS idU, u.nom AS nomU, u.prenom "
     . "FROM Machine m "
     . "INNER JOIN Salle s ON m.idSalle = s.id "
     . "INNER JOIN Utilisateur u ON m.idUser = u.id "
     . "WHERE m.id = $idMachine;";
$bdd->query("SET NAMES UTF8");
$res = $bdd->query($sql);
$dataModifMachine = $res->fetch();

$idM = $dataModifMachine['idM'];
$nomM = $dataModifMachine['nomM'];
$fabriquant = $dataModifMachine['fabriquant'];
$numSerie = $dataModifMachine['numSerie'];
$os = $dataModifMachine['os'];
$dateAchat = $dataModifMachine['anneeAchat'];
$format = $dataModifMachine['format'];
$numSalle = $dataModifMachine['num'];
$idU = $dataModifMachine['idU'];
$nomU = $dataModifMachine['nomU'];
$prenomU = $dataModifMachine['prenom'];



