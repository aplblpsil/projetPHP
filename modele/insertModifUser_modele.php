<?php
include('bdd_connect.php');
$idUser = $_GET['idUser'];
$mail = $_POST['ztMail'];
$nom = $_POST['ztNom'];
$prenom = $_POST['ztPrenom'];
$date = $_POST['ztDateNaiss'];
$dateConvertion = new DateTime();
$dateConverted = $dateConvertion->createFromFormat('d/m/Y', $date);
$dateN = $dateConverted->format('Y-m-d');
$tel = $_POST['ztTel'];
$fonction = $_POST['ztFonction'];

//switch ($fonction) {
//    case "Administrateur":
//        $fonction = 1;
//        break;
//    case "Salarié" :
//        $fonction = 2;
//        break;
//    case "Gestionnaire" :
//        $fonction = 3;
//        break; 
//}
$sql = "UPDATE Utilisateur SET mailLogin='".$mail."', nom='".$nom."', prenom='".$prenom."', date='".$dateN."', idFonction='".$fonction."'"
     . "WHERE id='".$idUser."';";
$bdd->exec($sql);


