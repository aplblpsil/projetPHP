<?php
include('bdd_connect.php');
$idUser = $_POST['idUser'];
$mail = $_POST['ztMail'];
$nom = $_POST['ztNom'];
$prenom = $_POST['ztPrenom'];
$date = $_POST['ztDateNaiss'];
$dateConvertion = new DateTime();
$dateConverted = $dateConvertion->createFromFormat('d/m/Y', $date);
$dateN = $dateConverted->format('Y-m-d');
$tel = $_POST['ztTel'];
$fonction = $_POST['ztFonction'];

$sql = "UPDATE utilisateur SET mailLogin='".$mail."', nom='".$nom."', prenom='".$prenom."', dateNaiss='".$dateN."', tel='".$tel."', idFonction=".$fonction.""
     . " WHERE id=".$idUser.";";

$bdd->exec($sql);

header('Location: ../control/index.php?pageType=globalUser&edited=true');


