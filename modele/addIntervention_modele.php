<?php

include_once('bdd_connect.php');

if(isset($_POST['admin'])){
    $admin=$_POST['admin'];
}
if(isset($_POST['priorite'])){
    $priorite=$_POST['priorite'];
    
}
if(isset($_POST['ticketSelect'])){
    $ticket=$_POST['ticketSelect'];
}
$req = "SELECT resolu FROM incident WHERE id=".$ticket.";";
$res=$bdd->query($req);
$res->fetch();

if($res == 0){
    $sql = 'INSERT INTO Intervention(idUser, idPriorite,idIncident)VALUES('.$admin.','.$priorite.','.$ticket.');';
    //print_r($sql);
    $bdd->exec($sql);
    header("location: ../control/index.php?pageType=globalTicketG&Int=cree");
}else{
    header("location: ../control/index.php?pageType=globalTicketG&Int=erreur");
}


?>

    


