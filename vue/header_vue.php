<header>
    <div id='header_left'>
        <img src='../assets/img/logo.png' alt='logo'>
        <span>Gestion de parc LPSIL</span> 
    </div>
    <div id='header_right'>
        <ul>
            <?php
            if(isset($_REQUEST['access'])) {
                $fonction = $_REQUEST['access'];
                $isAcces = false;
                if($fonction == 'Administrateur') {  $isAcces = true; /* menu de l'admin */ ?>
            
                    <li><a href="index.php?pageType=accueil&access=<?php echo $fonction ?>">accueil</a></li>
                    <li><a href="index.php?pageType=inscription&access=<?php echo $fonction ?>">Inscription</a></li>
                    <li><a href="index.php?pageType=globalUser&access=<?php echo $fonction ?>">Liste utilisateurs</a></li>
                    <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
                    
            <?php } if($fonction == 'Salarié') { $isAcces = true; /* menu de l'user */ ?>
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=viewTicketU&access=<?php echo $fonction ?>">mes tickets</a></li>
                    <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
                    
            <?php } if($fonction == 'Gestionnaire') { $isAcces = true; /* menu du gestionnaire */ ?>
                    
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
                    
            <?php } if(!$isAcces) { /* acces non autorisé ou user non connecté */ ?>
                    
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=connexion">connexion</a></li>
                    
            <?php } } else { ?>
                    
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=connexion">connexion</a></li>
            <?php } ?>
        </ul>
    </div>
</header>
