<?php

if(isset($_GET['pageType'])) {
    // la page demandée
    $laPage = $_GET['pageType'];

    // le type d'accès
    if(isset($_SESSION['idU'])) {

        $access = $_SESSION['fonctionU']; 

        if($access != 'Administrateur' && $access != 'Salarié' && $access != 'Gestionnaire') { 

            include('../modele/deconnexion_modele.php');

        } else {
            if($access == 'Administrateur') {
                switch ($laPage) {
                    case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                    case 'accueil':               include('accueil_vue.php');                   break;
                    // gestion user
                    case 'globalUser':            include('listeUser_vue.php');                 break;
                    case 'modifUser':             include('modifUser_vue.php');                 break;
                    case 'delUser':               include('../modele/delUser_modele.php');      break;
                    case 'addUser':               include('addUser_vue.php');                   break;                 
                    // gestion infrastructure
                    case 'globalIncident':        include('listeIncident_vue.php');             break;
                    case 'globalMachine':         include('listeMachine_vue.php');              break;
                    case 'globalInterventions':   include('ListIntervention_vue.php');        break;

                    default:                      include('error404_vue.php');
                }
            }

            if($access == 'Salarié') { 
                switch ($laPage) {
                    case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                    case 'accueil':               include('accueil_vue.php');                   break;
                    case 'viewTicketU':           include('viewTicketUser_vue.php');            break;
                    case 'addTicketU' :           include('addTicketUser_vue.php');             break;

                    default:                      include('error404_vue.php');
                }
            }

            if($access == 'Gestionnaire') {
                switch ($laPage) {
                    case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                    case 'accueil':               include('accueil_vue.php');                   break;
                    case 'addIntervention':       include('addIntervention_vue.php');           break;
                    case 'listIntervention':       include('ListIntervention_vue.php');           break;

                    default:                      include('error404_vue.php');
                }
            }
        }
    } else {
        switch ($laPage) {
            case 'connexion':    include('connexion_vue.php');     break;
            case 'accueil':      include('accueil_vue.php');       break;

            default:             include('error404_vue.php');
        }
    }
} else {
    include('accueil_vue.php');
}

?>
