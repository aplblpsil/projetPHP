<div>
    <h3><center>Mes tickets d'incident</center></h3>
    <?php
        if(isset($_REQUEST['ac'])) {
            if($_REQUEST['ac'] == 'added') {
    ?>
    <div class="msgSucces">    
        <span> Votre ticket d'incident a bien été enregistré </span>
    </div>
    <?php
            }
        }
    ?>
    <div id='cadrelisteTicket'>
        <?php include('../modele/listeTicketUser_modele.php') ?>
    </div>
    <div class="cadreAdd">
        <a class='btAdd' href="index.php?pageType=addTicketU">
            <img src="../assets/img/add-2.png" alt="btPlus">
            <span>Créer un ticket d'incident</span>
        </a>
    </div>
</div>
