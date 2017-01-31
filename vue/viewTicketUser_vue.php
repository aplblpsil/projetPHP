<div>
    <h3>Mes tickets d'incident</h3>
     <?php
            if(isset($_REQUEST['ac'])) {
                if($_REQUEST['ac'] == 'added') {
        ?>
        <span id="msgSucces"> Votre ticket d'incident a bien été enregistré </span>
        <?php
                }
            }
        ?>
    <div id='cadrelisteTicket'>
        <p> liste des tickets a remplir ... </p>
    </div>
    <div>
        <a class='btAdd' href="index.php?pageType=addTicketU&access=Salarié">Créer un ticket d'incident</a>
    </div>
    
    
</div>
