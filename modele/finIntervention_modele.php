<?php

include_once('bdd_connect.php');

$idInt = $_POST['idInt'];
$idTicket = $_POST['idTicket'];
$msg = $_POST['msg'];
$dateSaisie = $_POST['dateFin'];
$dateConvertion = new DateTime();
$dateConvertion->setDate($dateSaisie);
$dateFin = $dateConvertion->format('Y-m-d');


$stmt = $bdd->prepare("UPDATE intervention SET etat='Terminée', dateFin='".$dateFin."' WHERE id=:idInt;");
$stmt->bindValue(':idInt', $idInt);
$stmt->execute();
$stmt2 = $bdd->prepare("UPDATE incident SET resolu=1 WHERE id=:idTicket;");
$stmt->bindValue(':idTicket', $idTicket);
$stmt->execute();
header("Location: ../control/index.php?pageType=globalInterventions&finInterv='true'");

