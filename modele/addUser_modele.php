<?php
include ("connexionBDD.php");
 
        $mail = $_POST['ztMail'];
        $nom = $_POST['ztNom'];
        $prenom = $_POST['ztPrenom'];
        $date = $_POST['ztDateNaiss'];
        $tel = $_POST['ztTel'];
        $fonction = $_POST['ztFonction'];
        
        // Inscription
        $sql = "INSERT INTO Utilisateur(mailLogin,nom,prenom,dateNaiss,tel,idSalle,idFonction,idMachine) "
                . "VALUES ('".$mail."', '".$nom."','".$prenom."','".$date."','".$tel."'"
                . ",".$salle.",".$fonction.",".$machine.")";
        
        $dbh->exec($sql);							// Execution de la requete
	alert("enregistrement effectué");