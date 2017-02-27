<h3>Liste des utilisateurs</h3>
 <?php if(isset($_REQUEST['edited']) && $_REQUEST['edited']=="true"){ ?>    
    <div>
        <span class="msgSucces">L'utilisateur a bien été modifié et enregistré.</span>
    </div><br /><br />
<?php 
} ?>
<?php if(isset($_REQUEST['deleted']) && $_REQUEST['deleted']=="true"){ ?>
    <div>
        <span class="msgError">L'utilisateur a bien été supprimé.</span>
    </div><br /><br />
<?php 
} ?>
<div id="listUser">
    <?php include("../modele/listeUser_modele.php"); ?>
</div>
