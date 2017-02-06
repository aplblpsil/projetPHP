<?php

include ('bdd_connect.php');
$idUser=$_GET["idUser"];
$sql = "SELECT nom, prenom, mailLogin, tel, dateNaiss, idFonction FROM Utilisateur "
        . "WHERE id=".$idUser.";";
$bdd->query("SET NAMES UTF8");
$res = $bdd->query($sql);
$dataModifUser = $res->fetch();

$nom = $dataModifUser['nom'];
$prenom = $dataModifUser['prenom'];
$mail = $dataModifUser['mailLogin'];
$tel = $dataModifUser['tel'];
$dateN = $dataModifUser['dateNaiss'];
$dateConvertion = new DateTime($dateN);
$dateNaiss = $dateConvertion->format('d/m/Y');

$fonction = $dataModifUser['idFonction'];
