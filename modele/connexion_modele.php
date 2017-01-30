<?php

include_once('bdd_connect.php');

// Si les champs != vide, on va verifier ses champs
if(isset($_REQUEST['ztLogin']) && isset($_REQUEST['ztPassword'])) {
    
    $login = $_REQUEST['ztLogin'];
    $mdp = $_REQUEST['ztPassword'];
    $mdpMD5 = MD5($mdp);
    
    $lsQuery = "SELECT * FROM utilisateur WHERE mailLogin = '".$login."' AND mdp = '$mdpMD5'";
    $rep = $bdd->query($lsQuery);
    $dataConnect = $rep->fetch();
    
    $fonction = $dataConnect['idFonction'];
    if($fonction == 1) { $fonction = 'admin'; }
    if($fonction == 2) { $fonction = 'user'; }

    // Si c'est bien un utilisateur, il est connecté
    if($dataConnect) {
        header("location: ../control/index.php?pageType=accueil&access=$fonction");
    // Sinon message d'erreur   
    } else {
        header("location: ../control/index.php?pageType=connexion&access=refuse");  
    }
} else {
     header("location: ../control/index.php?pageType=connexion");
}

?>