<?php

// Entête de page 
include ("header_vue.php");

?>

<div id="container">
    <?php
    // Corps de la page selon le choix de l'utilisateur
    include ("contenu_vue.php");
    ?>
</div>

<?php

// Pied de page 
include ("footer_vue.php");

?>