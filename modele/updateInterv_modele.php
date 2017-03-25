<?php

include_once('bdd_connect.php');

$idInt = $_GET['idInt'];
$idTicket = $_GET['idTicket'];
$today = date('Y-m-d');

$stmt = $bdd->prepare("UPDATE intervention SET etat='En cours', dateInt='".$today."' WHERE id=:idInt;");
$stmt->bindValue(':idInt', $idInt);
$stmt->execute();

header("Location: ../control/index.php?pageType=intervTicket&idInt=".$idInt."&idTicket=".$idTicket."");


