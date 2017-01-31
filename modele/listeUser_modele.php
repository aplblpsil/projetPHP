<?php 
include ('bdd_connect.php');
$sql = "SELECT nom, prenom, mailLogin, tel, dateNaiss, description FROM Utilisateur "
        . "INNER JOIN Fonction ON Utilisateur.idFonction = Fonction.id ORDER BY Fonction.description;";
$bdd->query("SET NAMES UTF8");
$res = $bdd->query($sql);
$dataUsers = $res->fetchAll();
$cadreUser = "";

foreach  ($bdd->query($sql) as $row) {
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
                    . "<span class='lien'><a href='index.php?pageType=modifUser&access=Administrateur'>"
                        . "<img src='../assets/img/edit.png' alt='editer utilisateur'/>"
                    . "</a></span>"
                    . "<span class='lien'><a href='index.php?pageType=delUser&access=Administrateur'>"
                        . "<img src='../assets/img/trash.png' alt='editer utilisateur'/>"
                    . "</a></span>"
                
               
            . "</div>";
    echo $cadreUser;
}

?>

