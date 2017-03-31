<div>
    <h3>Ajouter un logiciel</h3>
    
    <?php include("../modele/modifLogiciel_modele.php"); ?>
    
    <form method="POST" action="../modele/insertModifLogiciel_modele.php">
        <fieldset id="formAddLogiciel">
            <legend>Caractéristiques:</legend>
            <!-- informations sur le logiciel -->
            <input type="text" name="idL" value="<?php echo $idL; ?>" hidden="hidden"/>
            
            <label for="ztNom">Nom du logiciel :</label><br />
            <input type="text" id="ztNom" name="ztNom" value="<?php echo $nomL ?>"><br /><br />
            
            <label for="ztDescriptionL">Description :</label><br />
            <textarea id="ztDescriptionL" name="ztDescriptionL"><?php echo $descriptionL ?></textarea><br /><br />
            
            <!-- effacer/valider les champs -->
            <input type="reset" value="Effacer" class="btReset">
            <input type="submit" value="Valider" class="btSubmit">
        </fieldset>
    </form>
</div>