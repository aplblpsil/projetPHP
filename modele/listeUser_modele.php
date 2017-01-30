<?php 
$sql = "SELECT * FROM Utilisateur INNER JOIN Fonction ON Utilisateur.idFonction = Fonction.id ORDER BY description";
$bdd = query($sql);

$cadreUser = "";

while($bdd) {
    $nom = $bdd['nom'];
    $prenom = $bdd['prenom'];
    $mail = $bdd['mailLogin'];
    $tel = $bdd['tel'];
    $dateNaiss = $bdd['dateNaiss'];
    $fonction = $bdd['description'];
    $cadreUser .= "<div class='user'>"
            . "<span><span>".$nom." ".$prenom."</span><span>$fonction</span> </span>"
            . "</div>";
    $bdd->fetch();
}

echo $cadreUser;

