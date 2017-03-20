<h3>Liste des machines</h3>

 <?php if(isset($_REQUEST['edited']) && $_REQUEST['edited']=="true"){ ?>
        <div>
            <span class="msgSucces">La machine a bien été modifiée et enregistrée.</span>
        </div><br /><br />
    <?php 
        } 
    ?>
    <?php if(isset($_REQUEST['deleted']) && $_REQUEST['deleted']=="true"){ ?>
           <div>
               <span class="msgError">La machine a bien été supprimée.</span>
           </div><br /><br />
    <?php 
        } 
    ?>

<div id="listeMachines">
    <?php include("../modele/listeMachines_modele.php"); ?>
</div>