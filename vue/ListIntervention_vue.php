<h3>Liste des interventions</h3>

<?php if(isset($_REQUEST['deleted']) && $_REQUEST['deleted']=="true"){ ?>
        
        <div>
            <span class="msgError">L'intervention a bien été supprimé.</span>
        </div><br /><br />
    <?php 
    } ?>
        
<div>
    <?php include("../modele/ListIntervention_modele.php"); ?>
</div>
