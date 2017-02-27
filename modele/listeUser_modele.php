<?php 
include ('bdd_connect.php');
$sql = "SELECT utilisateur.id, nom, prenom, mailLogin, tel, dateNaiss, description FROM utilisateur "
     . "INNER JOIN fonction ON utilisateur.idFonction = fonction.id ORDER BY fonction.description;";

$bdd->query("SET NAMES UTF8");
$res = $bdd->query($sql);
$dataUsers = $res->fetchAll();
$cadreUser = "";

foreach  ($dataUsers as $row) {
    $id = $row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $mail = $row['mailLogin'];
    $tel = $row['tel'];
    $dateNaiss = $row['dateNaiss'];
    $fonction = $row['description'];
    $cadreUser = "<div class='user'>"
                
                    . "<span class='info'>".$nom." ".$prenom."</span>"
                    . "<span class='info'>$mail</span>"
                    . "<span class='info'>$tel</span>"
                    . "<span class='info'>$fonction</span>"
                    . "<span class='lien'><a href='index.php?pageType=modifUser&idUser=".$id."'>"
                        . "<img src='../assets/img/edit.png' alt='editer_utilisateur'/>"
                    . "</a></span>";
                    if($_SESSION['idU']!=$id){
                        $cadreUser .= "<span class='lien'><a href='index.php?pageType=delUser&idUser=$id'>"
                        . "<img src='../assets/img/trash.png' alt='supprimer_utilisateur' onclick='return confirm('Etes-vous sûr de vouloir supprimer cet utilisateur?');'/>"
                        . "</a></span>";       
                    }else{
                        $cadreUser .= "<span class='lien'></span>";
                    }
            $cadreUser .= "</div>";
    echo $cadreUser;
}

?>

