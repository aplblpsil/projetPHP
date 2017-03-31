<div>
    <h3>Ajouter un logiciel</h3>

    <form method="POST" action="../modele/addLogiciel_modele.php">
        <fieldset id="formAddLogiciel">
            <legend>Caractéristiques:</legend>
            
            <label for="ztNom">Nom du logiciel :</label><br />
            <input required="" type="text" id="ztNom" name="ztNom"><br /><br />
            
            <label for="ztDescription">Description :</label><br />
            <input required="" type="text" id="ztDescription" name="ztDescription"><br /><br />
            
            <!-- effacer/valider les champs -->
            <input type="reset" value="Effacer" class="btReset">
            <input type="submit" value="Valider" class="btSubmit">
        </fieldset>
    </form>
</div>