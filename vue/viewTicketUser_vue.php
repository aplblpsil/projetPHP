<div>
    <h3>Mes tickets d'incident</h3>
     <?php
     echo $_SESSION['fonctionU'];
            if(isset($_REQUEST['ac'])) {
                if($_REQUEST['ac'] == 'added') {
        ?>
        <span id="msgSucces"> Votre ticket d'incident a bien été enregistré </span>
        <?php
                }
            }
        ?>
    <div id='cadrelisteTicket'>
       <?php include('../modele/listeTicketUser_modele.php') ?>
    </div>
    <div>
        <a class='btAdd' href="index.php?pageType=addTicketU&access=Salarié">
            <img src="../assets/img/add-2.png" alt="btPlus">
            <span>Créer un ticket d'incident</span>
        </a>
    </div>
</div>
