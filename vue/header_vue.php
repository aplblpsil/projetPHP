<header>
    <div id='header_left'>
        <img src='../assets/img/logo.png' alt='logo'>
        <span>Gestion de parc LPSIL</span> 
    </div>
    <div id='header_right'>
        <ul>
            <?php
            if(isset($_SESSION['idU'])) {
                $fonction = $_SESSION['fonctionU'];
                if($fonction == 'Administrateur') { /* menu de l'admin */ ?>
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=addUser">Inscription</a></li>
                    <li><a href="index.php?pageType=globalUser">Liste utilisateurs</a></li>
                    <li><a href="index.php?pageType=globalMachine">Liste machines</a></li>
                    <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
                    
            <?php } if($fonction == 'Salarié') { /* menu de l'user */ ?>
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=globalTicketU">mes tickets</a></li>
                    <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
                    
            <?php } if($fonction == 'Gestionnaire') { /* menu du gestionnaire */ ?>           
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=addIntervention">création des interventions</a></li>
                    <li><a href="index.php?pageType=listIntervention">liste des interventions</a></li>
                    <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
                    
            <?php } 
            } else { 
            ?>
                    <li><a href="index.php?pageType=accueil">accueil</a></li>
                    <li><a href="index.php?pageType=connexion">connexion</a></li>
            <?php } ?>
        </ul>
    </div>
</header>
