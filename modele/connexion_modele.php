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
    
    // Si c'est bien un utilisateur, il est connecté
    if($dataConnect) {
        
        $idUser = $dataConnect['id'];
        $fonction = $dataConnect['idFonction'];
        $loginUser = $dataConnect['mailLogin'];
        
        if($fonction == 1) { $fonction = 'Administrateur'; }
        if($fonction == 2) { $fonction = 'Salarié'; }
        if($fonction == 3) { $fonction = 'Gestionnaire'; }
    
        header("location: ../control/index.php?pageType=accueil&access=$fonction");
    // Sinon message d'erreur   
    } else {
        header("location: ../control/index.php?pageType=connexion&access=refuse");  
    }
} else {
     header("location: ../control/index.php?pageType=connexion");
}

?>
