<form  method="POST" action="">
    <fieldset  id="formInscription">
        <legend>Inscription</legend>
        <!-- informations sur l'utilisateur -->
        <input type="text" id="ztMail" name="ztMail" placeholder="email..."><br />
        <input type="text" id="ztNom" name="ztNom" placeholder="nom..."><br /><br />
        <input type="text" id="ztPrenom" name="ztPrenom" placeholder="prénom..."><br /><br />
        <input type="date" id="ztDateNaiss" name="ztDateNaiss" placeholder="date de naissance..."><br /><br />
        <input type="text" id="ztTel" name="ztTel" placeholder="tel..."><br /><br />
        <input type="text" id="ztSalle" name="ztSalle" placeholder="ID de la salle..."><br /><br />
        <input type="text" id="ztFonction" name="ztFonction" placeholder="ID de la fonction..."><br /><br />
        <input type="text" id="ztMachine" name="ztMachine" placeholder="ID de la machine..."><br /><br />
        <!-- effacer/valider les champs -->
        <input type="reset" value="effacer" class="btReset">
        <input type="submit" value="valider" class="btSubmit">
    </fieldset>
</form>
