<?php
include ("connexionBDD.php");
 
        $mail = $_POST['ztMail'];
        $nom = $_POST['ztNom'];
        $prenom = $_POST['ztPrenom'];
        $date = $_POST['ztDateNaiss'];
        $tel = $_POST['ztTel'];
        $salle = $_POST['ztSalle'];
        $fonction = $_POST['ztFonction'];
        $machine = $_POST['ztMachine'];
        
        // Inscription
        $sql = "INSERT INTO Utilisateur(mailLogin,nom,prenom,dateNaiss,tel,idSalle,idFonction,idMachine) "
                . "VALUES ('".$mail."', '".$nom."','".$prenom."','".$date."','".$tel."'"
                . ",".$salle.",".$fonction.",".$machine.")";
        
        $dbh->exec($sql);							// Execution de la requete
	alert("enregistrement effectué");
            
        
           

