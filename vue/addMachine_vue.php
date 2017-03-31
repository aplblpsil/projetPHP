<div>
    <h3>Ajouter une machine</h3>

    <form method="POST" action="../modele/addMachine_modele.php">
        <fieldset id="formAddMachine">
            <legend>Caractéristiques:</legend>
            
            <label for="ztFormat">Format :</label><br />
            <input required="" type="text" id="ztFormat" name="ztFormat"><br /><br />
            
            <label for="ztMachine">Nom machine :</label><br />
            <input required="" type="text" id="ztMachine" name="ztMachine"><br /><br />
            
            <label for="ztNumSerie">Numéro de série :</label><br />
            <input required="" type="text" id="ztNumSerie" name="ztNumSerie"><br /><br />
            
            <label for="ztFabriquant">Fabriquant :</label><br />
            <input required="" type="text" id="ztFabriquant" name="ztFabriquant"><br /><br />
            
            <label for="ztOS">Système d'exploitation :</label><br />
            <input required="" type="text" id="ztOS" name="ztOS"><br /><br />
            
            <label for="ztDateAchat">Année d'achat :</label><br />
            <input required="" type="text" id="ztDateAchat" name="ztDateAchat"><br /><br />
            
            <label for="ztSalle">Rattaché à la salle :</label><br /> 
            <select id="ztSalle" name="ztSalle">
               <?php include("../modele/listeAllSalle.php");?>
            </select><br /><br />
            
            <label for="ztAttribution">Attribuer la machine à :</label><br />
            <select id="ztAttribution" name="ztAttribution">
               <?php include("../modele/listeAllUser.php");?>
            </select><br /><br />
            
            <!-- effacer/valider les champs -->
            <input type="reset" value="Effacer" class="btReset">
            <input type="submit" value="Valider" class="btSubmit">
        </fieldset>
    </form>
</div>
