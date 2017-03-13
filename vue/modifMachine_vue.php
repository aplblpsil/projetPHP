<div>
    <h3>Modifier l'utilisateur</h3>
    <?php include("../modele/modifMachine_modele.php"); ?>

    <form method="POST" action="../modele/insertModifMachine_modele.php">
        <fieldset  id="formModifUser">
            <legend>Profil</legend>
            <!-- informations sur l'utilisateur -->
            <input type="text" name="idM" value="<?php echo $idMachine; ?>" hidden="hidden"/>
            
            <label for="ztFormat">Format :</label><br />
            <input type="text" id="ztFormat" name="ztFormat" value="<?php echo $format?>"><br /><br />
            
            <label for="ztMachine">Nom machine :</label><br />
            <input type="text" id="ztMachine" name="ztMachine" value="<?php echo $nomM?>"><br /><br />
            
            <label for="ztNumSerie">Numéro de série :</label><br />
            <input type="text" id="ztNumSerie" name="ztNumSerie" value="<?php echo $numSerie?>"><br /><br />
            
            <label for="ztFabriquant">Fabriquant :</label><br />
            <input type="text" id="ztFabriquant" name="ztFabriquant" value="<?php echo $fabriquant?>"><br /><br />
            
            <label for="ztOS">Système d'exploitation :</label><br />
            <input type="text" id="ztOS" name="ztOS" value="<?php echo $os?>"><br /><br />
            
            <label for="ztDateAchat">Année d'achat :</label><br />
            <input type="text" id="ztDateAchat" name="ztDateAchat" value="<?php echo $dateAchat?>"><br /><br />
            
            <label for="ztSalle">Rattaché à la salle :</label><br /> 
            <select id="ztSalle" name="ztSalle">
                <option value ="<?php echo $idU; ?>"> salle actuelle : <?php echo $numSalle; ?></option>
               <?php include("../modele/listeAllSalle.php");?>
            </select><br /><br />
            
            <label for="ztAttribution">Attribuer la machine à :</label><br />
            <select id="ztAttribution" name="ztAttribution">
                <option value ="<?php echo $idU; ?>"> utilisateur actuel : <?php echo $nomU." - ".$prenomU; ?></option>
               <?php include("../modele/listeAllUser.php");?>
            </select><br /><br />
            
            <!-- effacer/valider les champs -->
            <input type="reset" value="Effacer" class="btReset">
            <input type="submit" value="Valider" class="btSubmit">
        </fieldset>
    </form>
</div>
