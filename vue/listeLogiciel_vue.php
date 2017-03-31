<h3>Liste des logiciels</h3>

    <?php if(isset($_REQUEST['edited']) && $_REQUEST['edited']=="true"){ ?>
        <div>
            <span class="msgSucces">Le logiciel a bien été modifié et enregistré.</span>
        </div><br /><br />
    <?php 
        } 
    ?>
    <?php if(isset($_REQUEST['added']) && $_REQUEST['added']=="true"){ ?>
           <div>
               <span class="msgSucces">Le logiciel a bien été ajouté.</span>
           </div><br /><br />
    <?php 
        } 
    ?>
    <?php if(isset($_REQUEST['deleted']) && $_REQUEST['deleted']=="true"){ ?>
           <div>
               <span class="msgError">Le logiciel a bien été supprimé.</span>
           </div><br /><br />
    <?php 
        } 
    ?>

<div>          
    <span class="bold">Rechercher un logiciel:</span><br />
    <label for="searchNomU">Logiciel:</label>
    <input type="text" name="nomL" id="searchNomL" class="ztSearch"/>
    <input type="submit" onclick="searchU();" value="chercher" class="btSubmit" />
</div><br />   
<div>
    <a href="index.php?pageType=addLogiciel" class="btAdd">
        <img src="../assets/img/add-2.png" alt="btPlus">
        <span>Ajouter un logiciel</span>
    </a>
</div><br/>           
<div id="listeLogiciels">
    <?php include("../modele/listeLogiciel_modele.php"); ?>
</div>
<br />


<script src="../assets/js/jquery.js" type="text/javascript"></script>
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    
<script>  
    function searchU() {
        var mot = $('#searchNomL').val();
        if(mot != "") {
            // afficher le/les machines avec le mot clé rentré
            $.ajax({
                type:       'GET',
                url:        '../modele/search_component.php',
                cache:      false,
                data:       'nomL=' + mot,
                datatype:   'html',
                success:    function(html) {
                                $('#listeLogiciels').empty();
                                $('#listeLogiciels').append(html);
                            } 
            });
        }
    }
</script>