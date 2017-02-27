<h3>Modifier l'utilisateur</h3>
<?php include("../modele/modifUser_modele.php"); ?>

<form  method="POST" action="../modele/insertModifUser_modele.php">
    <fieldset  id="formModifUser">
        <legend>Profil</legend>
        <!-- informations sur l'utilisateur -->
        <input type="text" name="idUser" value="<?php echo $idU; ?>" hidden="hidden"/>
        <label for="ztMail">Mail :</label><br />
        <input type="text" id="ztMail" name="ztMail" value="<?php echo $mail?>"><br /><br />
        <label for="ztNom">Nom :</label><br />
        <input type="text" id="ztNom" name="ztNom" value="<?php echo $nom?>"><br /><br />
        <label for="ztPrénom">Prénom :</label><br />
        <input type="text" id="ztPrenom" name="ztPrenom" value="<?php echo $prenom?>"><br /><br />
        <label for="ztDateNaiss">Date de naissance :</label><br />
        <input type="text" id="ztDateNaiss" name="ztDateNaiss" value="<?php echo $dateNaiss?>"><br /><br />
        <label for="ztTel">Téléphone :</label><br />
        <input type="text" id="ztTel" name="ztTel" value="<?php echo $tel?>"><br /><br />
        <label for="ztFonction">Fonction :</label><br />
        <?php if($fonction != 3){ ?>
        <select id="ztFonction" name="ztFonction">
            <option value="1" <?php if($fonction == 1){echo 'selected';}?>>Administrateur</option>
            <option value="2" <?php if($fonction == 2){echo 'selected';}?>>Salarié</option>
            <option value="3" disabled>Gestionnaire</option>
        </select><br /><br />
        <?php }else{ ?>
        <select id="ztFonction" name="ztFonction" >
            <option value="1" disabled>Administrateur</option>
            <option value="2" disabled>Salarié</option>   
            <option value="3" selected>Gestionnaire</option>
        </select><br /><br />
        <?php } ?>
        <!-- effacer/valider les champs -->
        <input type="reset" value="Effacer" class="btReset">
        <input type="submit" value="Valider" class="btSubmit">
    </fieldset>
</form>
