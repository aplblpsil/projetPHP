<h3>Modifier l'utilisateur</h3>
<?php include("../modele/modifUser_modele.php"); ?>
<form  method="POST" action="../modele/modifUser_modele.php">
    <fieldset  id="formModifUser">
        <legend>Profil</legend>
        <!-- informations sur l'utilisateur -->
        <input type="text" id="ztMail" name="ztMail" value="<?php echo $mail?>"><br /><br />
        <input type="text" id="ztNom" name="ztNom" value="<?php echo $nom?>"><br /><br />
        <input type="text" id="ztPrenom" name="ztPrenom" value="<?php echo $prenom?>"><br /><br />
        <input type="date" id="ztDateNaiss" name="ztDateNaiss" value="<?php echo $dateNaiss?>" placeholder="<?php echo $dateNaiss?>"><br /><br />
        <input type="text" id="ztTel" name="ztTel" value="<?php echo $tel?>"><br /><br />
        <?php if($fonction != 3){ ?>
        <select id="ztFonction" name="ztFonction">
            <option value="1" <?php if($fonction == 1){echo 'selected';}?>>Administrateur</option>
            <option value="2" <?php if($fonction == 2){echo 'selected';}?>>Salarié</option>
            <option value="3" disabled>Gestionnaire</option>
        </select><br /><br />
        <?php }else{ ?>
        <select id="ztFonction" name="ztFonction" disabled>
            <option value="1">Administrateur</option>
            <option value="2">Salarié</option>   
            <option value="3" selected>Gestionnaire</option>
        </select>
        <?php } ?>
        <!-- effacer/valider les champs -->
        <input type="reset" value="effacer" class="btReset">
        <input type="submit" value="valider" class="btSubmit">
    </fieldset>
</form>
