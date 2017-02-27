<?php
include ('bdd_connect.php');

$sql = "DELETE FROM utilisateur WHERE id=".$_GET['idUser'].";";
$bdd->exec($sql);

echo $sql;

header('Location: ../control/index.php?pageType=globalUser&deleted=true');

?>