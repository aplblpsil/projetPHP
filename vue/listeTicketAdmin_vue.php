<!-- Liste des tickets attribués pour l'administrateur connecté -->
<div>
    <h3>Tickets des incidents à résoudre</h3>
    <?php if(isset($_GET['finInterv'])){ ?>
        <p class='msgSucces'>Merci d'être intervenu, votre contribution a été enregistrée dans la base de données.</p>
    <?php } ?>
    <div>
            <?php include('../modele/listeTicketAdmin_modele.php') ?>
    </div>
</div>
