<div>
    <h2 id='titleNewTicket'>Nouveau ticket</h2>
    <form method='POST' action='../modele/addTicketUser_modele.php'>
    <div id='cadreNewTicket'>
        <div>
            <label for='ztTitre'>Titre:</label>
            <input type='text' id='ztTitreIncident' name='ztTitre'><br />
        </div>
        <div>
            <label for=''>Machine:</label>
            <select name="ldrMachine">
                <?php include("../modele/machines_modele.php") ?>
            </select>
        </div>
        <div>
            <label for='ztDate'>Date:</label>
            <input type='text' id='ztDate' name="ztDate" value="<?php echo date('d-m-Y') ?>"><br />
        </div>
        <div>
            <label id='labelDescription' for='ztDescription'>Description de l'incident:</label><br />
            <textarea rowspan='20' id='ztDescription' name='ztDescription'></textarea><br />
        </div>
        <div>
            <label for=''>Criticité du problème:</label>
            <select name="ldrCriticite">
                <?php include("../modele/criticite_modele.php") ?>
            </select>
        </div>
        <div id='cadreValidNewTicket'>
            <input type='reset' class='btReset' value='effacer'>
            <input type='submit' class='btSubmit' value='Valider'>
        </div>
    </div>
    </form>
</div>