<h3>Liste des machines</h3>

    <?php if(isset($_REQUEST['edited']) && $_REQUEST['edited']=="true"){ ?>
        <div>
            <span class="msgSucces">La machine a bien été modifiée et enregistrée.</span>
        </div><br /><br />
    <?php 
        } 
    ?>
    <?php if(isset($_REQUEST['added']) && $_REQUEST['added']=="true"){ ?>
           <div>
               <span class="msgSucces">La machine a bien été ajoutée.</span>
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
<div>          
    <span class="bold">Rechercher une machine:</span><br />
    <label for="searchNomM">Nom machine:</label>
    <input type="text" name="nomM" id="searchNomM" class="ztSearch"/>
    <input type="submit" onclick="search();" value="chercher" class="btSubmit" />
</div><br />
<div>
    <div>
        <a href="index.php?pageType=addMachine" class="btAdd">
            <img src="../assets/img/add-2.png" alt="btPlus">
            <span>Créer une machine</span>
        </a>
    </div>
</div><br/>
<div id="listeMachines">
    <?php include("../modele/listeMachines_modele.php"); ?>
</div>


<script src="../assets/js/jquery.js" type="text/javascript"></script>
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>

<script>
    
    function search() {
        var mot = $('#searchNomM').val();
        if(mot != "") {
            // afficher le/les machines avec le mot clé rentré
            $.ajax({
                type:       'GET',
                url:        '../modele/search_component.php',
                cache:      false,
                data:       'nomM=' + mot,
                datatype:   'html',
                success:    function(html) {
                                $('#listeMachines').empty();
                                $('#listeMachines').append(html);
                            } 
            });
        }
    }
</script>