<?php
include 'bdd_connect.php';

$sql = 'DELETE FROM Utilisateur WHERE id='.$_GET['idUser'].';';
print_r($sql);
$bdd->exec($sql);

header('Location: ../control/index.php?pageType=globalUser&deleted=true');

?>
