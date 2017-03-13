<?php
include 'bdd_connect.php';
if(isset($_GET['idM'])){
    $idMachine = $_GET['idM'];
}

$stmt = $bdd->prepare("UPDATE machine SET actif = :actif WHERE id= :id;");
$stmt->bindValue('id', $idMachine, PDO::PARAM_INT);
$stmt->bindValue('actif', 0, PDO::PARAM_INT);
$stmt->execute();

//print_r($stmt);
//
header('Location: ../control/index.php?pageType=globalMachine&deleted=true');

?>
