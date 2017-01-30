<?php
include ("bdd_connect.php");
 
        $mail = $_POST['ztMail'];
        $nom = $_POST['ztNom'];
        $prenom = $_POST['ztPrenom'];
        $date = $_POST['ztDateNaiss'];
        $tel = $_POST['ztTel'];
        $fonction = $_POST['ztFonction'];
        
        $mot_de_passe = "";
        $chaine = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ023456789";
        $longeur_chaine = strlen($chaine);
        
        for($i = 1; $i <= $longeur_chaine; $i++) {
            $place_aleatoire = mt_rand(0,($longeur_chaine-1));
            $mot_de_passe .= $chaine[$place_aleatoire];    
        }
        $mdpClairU = $mot_de_passe;
        $mdpMD5U = MD5($mot_de_passe);
        
        // Inscription
        $sql = "INSERT INTO Utilisateur(mailLogin,mdp,nom,prenom,dateNaiss,tel,idFonction) "
                . "VALUES ('".$mail."','".$mdpMD5U."', '".$nom."','".$prenom."','".$date."','".$tel."'"
                . ",".$fonction.");";
        
        $bdd->exec($sql);							// Execution de la requete
	
        echo "enregistrement effectué";
