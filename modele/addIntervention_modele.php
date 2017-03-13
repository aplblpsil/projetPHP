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
$sql = 'INSERT INTO Intervention(idUser, idPriorite,idIncident)VALUES('.$admin.','.$ticket.','.$priorite.');';
//print_r($sql);
$bdd->exec($sql);


?>

    


