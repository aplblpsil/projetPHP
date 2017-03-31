<header>
    <div id='header_left'>
        <img src='../assets/img/logo.png' alt='logo'>
        <span>Gestion de parc LPSIL</span> 
    </div>
    <div id='header_right'>
        <ul>
            <li><a href="index.php?pageType=accueil">accueil</a></li>
            <?php
            if(isset($_SESSION['idU'])) {
                include('../modele/lienHeader_modele.php');
                $fonction = $_SESSION['fonctionU'];
                if($fonction == 'Administrateur') { /* menu de l'admin */       
                    echo $admin;
                } if($fonction == 'Salarié') { /* menu de l'user */
                    echo $salarie;
                } if($fonction == 'Gestionnaire') { /* menu du gestionnaire */ 
                    echo $gestionnaire;
                } 
            ?>
                <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
            <?php
            } else { 
            ?>
                <li><a href="index.php?pageType=connexion">connexion</a></li      
            <?php 
            }
            ?>
        </ul>
    </div>
</header>
