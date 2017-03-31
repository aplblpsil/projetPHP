<?php

include 'bdd_connect.php';

if(isset($_GET['idL'])){
    $idL = $_GET['idL'];
}

$stmt = $bdd->prepare("UPDATE logiciel SET actif = :actif WHERE id= :id;");
$stmt->bindValue('id', $idL, PDO::PARAM_INT);
$stmt->bindValue('actif', 0, PDO::PARAM_INT);
$stmt->execute();

header('Location: ../control/index.php?pageType=globalLogiciel&deleted=true');

?>
