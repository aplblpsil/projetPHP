<div>
    <h3><center>Attribuez un incident à un administrateur</center></h3>
    <?php if(isset($_GET['Int'])&&$_GET['Int']=="cree"){ ?>
    <p class='msgSucces'>Intervention créée</p>
    <?php    }    ?>
    <?php if(isset($_GET['Int'])&&$_GET['Int']=="erreur"){ ?>
        <p class='msgError'>Une intervention ne peut pas être créée sur un incident déjà résolu</p>
    <?php    }    ?>
    <div id='cadrelisteTicket'>
        <h3><center>Liste des tickets d'incident</center></h3>
        <?php include('../modele/listeTicketGestion_modele.php') ?>
    </div>
    
    <div id='cadreAdmin'>
        <h3><center>Liste des administrateurs</center></h3>
        <?php include('../modele/form_intervention_modele.php') ?>
    </div>
    <script type="text/javascript" src="../assets/js/selectionTicket.js"></script>
</div>
