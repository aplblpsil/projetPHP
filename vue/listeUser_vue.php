<h3>Liste des utilisateurs</h3>
<?php if(isset($_REQUEST['edited']) && $_REQUEST['edited']=="true"){ ?>
    <div>
        <span class="msgSucces">L'utilisateur a bien été modifié et enregistré.</span>
    </div><br /><br />
<?php 
    } 
?>
<?php if(isset($_REQUEST['added']) && $_REQUEST['added']=="true"){ ?>
    <div>
        <span class="msgSucces">L'utilisateur a bien été créé.</span>
    </div><br /><br />
<?php 
    } 
?>
<?php if(isset($_REQUEST['deleted']) && $_REQUEST['deleted']=="true"){ ?>
       <div>
           <span class="msgError">L'utilisateur a bien été supprimé.</span>
       </div><br /><br />
<?php 
    } 
?>
       
<div>          
    <span class="bold">Rechercher un utilisateur:</span><br />
    <label for="searchNomU">Utilisateur:</label>
    <input type="text" name="nomU" id="searchNomU" class="ztSearch"/>
    <input type="submit" onclick="searchU();" value="chercher" class="btSubmit" />
</div><br />       
<div>
    <a href="index.php?pageType=addUser" class="btAdd">
        <img src="../assets/img/add-2.png" alt="btPlus">
        <span>Créer un utilisateur</span>
    </a>
</div><br/>
<div id="listUser">
   <?php include("../modele/listeUser_modele.php"); ?>
</div>
    <br />

    
<script src="../assets/js/jquery.js" type="text/javascript"></script>
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    
<script>  
    function searchU() {
        var mot = $('#searchNomU').val();
        if(mot != "") {
            // afficher le/les machines avec le mot clé rentré
            $.ajax({
                type:       'GET',
                url:        '../modele/search_component.php',
                cache:      false,
                data:       'nomU=' + mot,
                datatype:   'html',
                success:    function(html) {
                                $('#listUser').empty();
                                $('#listUser').append(html);
                            } 
            });
        }
    }
</script>