<?php

include ('bdd_connect.php');

$sql = "SELECT * FROM lienheader lh ;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataLienH = $req->fetchAll();

$admin = "";
$salarie = "";
$gestionnaire = "";

foreach($dataLienH as $unLienH) {
    $idLien = $unLienH['id'];
    $id_fonction = $unLienH['id_fonction'];
    $lien = $unLienH['lien'];
    
    if($id_fonction == 1) {
        $admin .= $lien;
    }
    
    if($id_fonction == 2) {
        $salarie .= $lien;
    }
    
    if($id_fonction == 3) {
        $gestionnaire .= $lien;
    }
    
}