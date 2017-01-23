<header>
    <div id='header_left'>
        <img src='../assets/img/logo.png' alt='logo'>
        <span>Gestion de parc LPSIL</span> 
    </div>
    <div id='header_right'>
        <ul>
            <?php
            if(isset($_REQUEST['access'])) {
                if($_REQUEST['access'] == 'admin' || $_REQUEST['access'] == 'user') {
                    $fonction = $_REQUEST['access'];
            ?>
                <li><a href="index.php?pageType=accueil&access=<?php echo $fonction ?>">accueil</a></li>
                <li><a href="index.php?pageType=deconnexion">d&eacute;connexion</a></li>
            <?php 
                } else { 
            ?>
                <li><a href="index.php?pageType=accueil">accueil</a></li>
                <li><a href="index.php?pageType=connexion">connexion</a></li>
            <?php
                }
            } else {  
            ?>
                <li><a href="index.php?pageType=accueil">accueil</a></li>
                <li><a href="index.php?pageType=connexion">connexion</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</header>