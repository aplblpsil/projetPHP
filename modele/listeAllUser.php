<?php
include_once("bdd_connect.php");

$sql = "SELECT u.id AS idU, nom, prenom, f.description FROM utilisateur u "
     . "INNER JOIN fonction f ON u.idFonction = f.id ;";
$bdd->query("SET NAMES UTF8");
$req = $bdd->query($sql);
$dataUsers = $req->fetchAll();

foreach ($dataUsers as $unUser) {
    $idUser = $unUser['idU'];
    $nomUser = $unUser['nom'];
    $prenomUser = $unUser['prenom'];
    $fonction = $unUser['description'];
    $ldrUser = "<option value='$idUser'>$fonction - $nomUser $prenomUser</option>";
    echo "$ldrUser";
}