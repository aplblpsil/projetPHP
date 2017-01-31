<form  method="POST" action="../modele/connexion_modele.php">
    <fieldset  id="formLogin">
        <legend>Authentification</legend>
        <!-- si erreur de connexion -->
        <?php
            if(isset($_REQUEST['access'])) {
                if($_REQUEST['access'] == 'refuse') {
            
        ?>
        <span id="erreurConnexion"> Login ou mot de passe incorrect </span>
        <?php
                }
            }
        ?>
        <br />
        <!-- informations de connexion -->
        <input type="text" id="ztLogin" name="ztLogin" required="required" placeholder="votre email..."><br />
        <input type="password" id="ztPassword" name="ztPassword" required="required" placeholder="votre mot de passe..."><br /><br />
        <!-- effacer/valider les champs -->
        <input type="reset" value="effacer" class="btReset">
        <input type="submit" value="valider" class="btSubmit">
    </fieldset>
</form>
