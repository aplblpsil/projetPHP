<?php
include 'bdd_connect.php';
if(isset($_GET['idUser'])){
    $id=$_GET['idUser'];
}

$stmt = $bdd->prepare("UPDATE utilisateur SET etat=0 WHERE id= :id;");
$stmt->bindValue('id', $id, PDO::PARAM_INT);
print_r($stmt);
$stmt->execute();

header('Location: ../control/index.php?pageType=globalUser&deleted=true');

?>
