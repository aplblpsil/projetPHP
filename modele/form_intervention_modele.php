<?php

include_once('bdd_connect.php');

$reqAdmin = "SELECT nom, prenom, id,idFonction from utilisateur "
        . "WHERE idFonction= 1;";
$repAdmin = $bdd->query($reqAdmin);
$dataAdmin = $repAdmin->fetchAll();
 if(isset($_GET['idTicket']) AND !empty($_GET['idTicket'])){
     $idTicket=$_GET['idTicket'];
 }
//$idInterv=$_GET[idTicket];

$cadreAdmin = "<div>"
                ."<form method='POST' action='../modele/addIntervention_modele.php'>"
                    ."<fieldset>"
                        ."<legend>Attribution d'un Administrateur</legend>"
                        ."<p>Administrateur : </p>"
                        ."<select name='admin'>";
                            foreach ($dataAdmin as $unAdmin) {
                                $nom = $unAdmin['nom'];
                                $prenom = $unAdmin['prenom'];
                                $idAdmin = $unAdmin['id'];
                                $cadreAdmin .= "<option value='$idAdmin'>$nom $prenom </option>";
                            }
                        $cadreAdmin .="</select>"
                        ."<p>Niveau de priorité : </p>"
                                
                        ."<select name='priorite'>"
                            ."<option value='1'>Faible</option>"
                            ."<option value='2'>Forte</option>"
                            ."<option value='3'>Urgente</option>"
                        ."</select><br/><br/>";
                        //$var = $_POST['priorite'];
                        
                       
                            $cadreAdmin .="<p>Selectionez un ticket</p>"
                                ."<input type='text' name='ticketSelect' id='ticketSelect' readonly required='required'><br/><br/>"
                                ."<input type='submit' id='btHidden' name='valider' value='valider' class='btSubmit'>";
                        
                        
                    $cadreAdmin .="</fieldset>"
                ."</form>"
            ."</div>";                    
         
 
    echo "$cadreAdmin";
