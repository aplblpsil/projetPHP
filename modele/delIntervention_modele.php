<?php
include 'bdd_connect.php';

$sql = 'DELETE FROM Intervention WHERE id='.$_GET['idIntervention'].';';
print_r($sql);
$bdd->exec($sql);

//header('Location: ../control/index.php?pageType=globalInterventions&deleted=true');

?>

