<form  method="POST" action="../modele/addUser_modele.php">
    <fieldset  id="formInscription">
        <legend>Inscription</legend>
        <!-- informations sur l'utilisateur -->
        <input required="" type="text" id="ztMail" name="ztMail" placeholder="email..."><br /><br />
        <input required="" type="text" id="ztNom" name="ztNom" placeholder="nom..."><br /><br />
        <input required="" type="text" id="ztPrenom" name="ztPrenom" placeholder="prénom..."><br /><br />
        <input required="" type="date" id="ztDateNaiss" name="ztDateNaiss" placeholder="date de naissance..."><br /><br />
        <input type="text" id="ztTel" name="ztTel" placeholder="tel..."><br /><br />
        
        <select id="ztFonction" name="ztFonction">
            <option value="1">Administrateur</option>
            <option value="2">Salarié</option>
            <option value="3">Gestionnaire</option> 
        </select><br /><br />
        
        <!-- effacer/valider les champs -->
        <input type="reset" value="effacer" class="btReset">
        <input type="submit" value="valider" class="btSubmit">
    </fieldset>
</form>
