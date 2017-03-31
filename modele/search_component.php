<?php
session_start();
include_once('bdd_connect.php');

if (!empty($_GET)) {
    $join = "";
    $or = "";
    if(isset($_GET['nomM']) && $_GET['nomM'] != "") {
        $nomParam = $_GET['nomM'];         
        $nomTable = "machine m";
        $nomAttr = "m.nom";
        $lienParam = "nomM";
        $editLien = "modifMachine";
        $delLien = "delMachine";
        $idParam = "idM";
        $join = " INNER JOIN utilisateur u ON m.idUser = u.id ";
        $attributs = "m.id AS idM, m.nom AS nomM, numSerie, format, u.nom AS nomUser, u.prenom AS prenomUser, actif";
    }
    
    if(isset($_GET['nomU']) && $_GET['nomU'] != "") {
        $nomParam = $_GET['nomU'];         
        $nomTable = "utilisateur u";
        $nomAttr = "u.nom";
        $or = " OR u.prenom LIKE '%".$nomParam."%'";
        $lienParam = "nomU";
        $editLien = "modifUser";
        $delLien = "delUser";
        $idParam = "idU";
        $join = " INNER JOIN fonction f ON u.idFonction = f.id ";
        $attributs = "u.id AS idU, u.nom, u.prenom, u.mailLogin, u.tel, f.description";
    }
    
    if(isset($_GET['nomL']) && $_GET['nomL'] != "") {
        $nomParam = $_GET['nomL'];         
        $nomTable = "logiciel l";
        $nomAttr = "l.nom";
        $lienParam = "nomL";
        $editLien = "modifLogiciel";
        $delLien = "delLogiciel";
        $idParam = "idL";
        $attributs = "l.id AS idL, l.nom, l.actif, l.description";
    }
      
    $sql = "SELECT ".$attributs." FROM ".$nomTable." ".$join." WHERE ".$nomAttr." LIKE '%".$nomParam."%' $or ;";
    
    $bdd->query("SET NAMES UTF8");
    $req = $bdd->query($sql);
    $data = $req->fetchAll();
    
    if(isset($_GET['nomM']) && $_GET['nomM'] != "") {
        foreach($data as $uneData) {
            $id = $uneData['idM'];
            $nom = $uneData['nomM'];
            $numMachine = $uneData['numSerie'];
            $formatMachine = $uneData['format'];
            $nomUser = $uneData['nomUser'];
            $prenomUser = $uneData['prenomUser'];
            $actif = $uneData['actif'];
            if($actif == 1){
                $listeResult = "<div class='cadreListe'>"
                                . "<span class='info'><b>Type du terminal</b> ".$formatMachine."</span> "
                                . "<span class='info'><b>Numéro machine</b> ".$numMachine."</span> "
                                . "<span class='info'><b>Nom machine</b> ".$nom."</span> "
                                . "<span class='info'><b>Utilisé par</b> ".$nomUser. " ". $prenomUser."</span> "
                                . "<span class='lien'>"
                                    . "<a href='index.php?pageType=$editLien&$idParam=".$id."'>"
                                    . "<img src='../assets/img/edit.png' alt='$editLien'/>"
                                    . "</a>"
                                . "</span>"
                                . "<span class='lien'>"
                                    . "<a href='index.php?pageType=$delLien&$idParam=".$id."'>"
                                    . "<img src='../assets/img/trash.png' alt='$delLien'/>"
                                    . "</a>"
                                . "</span>"
                            . "</div>";

                echo $listeResult;
            }
        }
    }
    
    if(isset($_GET['nomU'])  && $_GET['nomU'] != "") {
        foreach($data as $uneData) {
            $id = $uneData['idU'];
            $nomUser = $uneData['nom'];
            $prenomUser = $uneData['prenom'];
            $mail = $uneData['mailLogin'];
            $tel = $uneData['tel'];
            $fonction = $uneData['description'];
            
            $listeResult = "<div class='cadreListe'>"
                        . "<span class='info'><b>Utilisateur</b> ".$nomUser." ".$prenomUser."</span>"
                        . "<span class='info'><b>Email</b> ".$mail."</span>"
                        . "<span class='info'><b>Téléphone</b> ".$tel."</span>"
                        . "<span class='info'><b>Fonction</b> ".$fonction."</span>"
                        . "<span class='lien'>"
                            . "<a href='index.php?pageType=modifUser&idUser=".$id."'>"
                            . "<img src='../assets/img/edit.png' alt='editer_utilisateur'/>"
                            . "</a>"
                        . "</span>";
                        if($_SESSION['idU']!=$id) {
                            $listeResult .= "<span class='lien'>"
                                            . "<a href='index.php?pageType=delUser&idUser=".$id."' >"
                                            . "<img src='../assets/img/trash.png' alt='supprimer_utilisateur' />"
                                            . "</a>"
                                       . "</span>";       
                        } else {
                            $listeResult .= "<span class='lien'></span>";
                        }
            $listeResult .= "</div>";
            echo $listeResult;
        }
    }
    
    if(isset($_GET['nomL'])  && $_GET['nomL'] != "") {
        foreach ($data as $uneData) {
            $idL = $uneData['idL'];
            $nomL = $uneData['nom'];
            $descriptionL = $uneData['description'];
            $actifL = $uneData['actif'];
            if($actifL == 1){
                $listeLogiciel = "<div class='cadreListe'>"
                                . "<span class='info'><b>Logiciel</b> ".$nomL."</span> "
                                . "<span class='info'><b>Description</b> ".$descriptionL."</span> "
                                . "<span class='lien'>"
                                    . "<a href='index.php?pageType=modifLogiciel&idL=".$idL."'>"
                                    . "<img src='../assets/img/edit.png' alt='editer_logiciel'/>"
                                    . "</a>"
                                . "</span>"
                                . "<span class='lien'>"
                                    . "<a href='index.php?pageType=delLogiciel&idL=$idL'>"
                                    . "<img src='../assets/img/trash.png' alt='supprimer_logiciel'/>"
                                    . "</a>"
                                . "</span>"
                            . "</div>";
                echo $listeLogiciel;
            }
        }
    }

} else {
    header('Location: ../control/index.php?pageType=globalMachine&param=no');
}
