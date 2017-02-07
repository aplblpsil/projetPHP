<?php

    if(isset($_GET['pageType'])) {    
        // la page demandée
        $laPage = $_GET['pageType'];
     
        if($laPage == 'connexion') {
            include('connexion_vue.php');
        }
        if($laPage == 'accueil') {
            include('accueil_vue.php');
        }
         if($laPage == 'deconnexion') {
            include('../modele/deconnexion_modele.php');
        }
    
    } else {
        include('accueil_vue.php');
    }

    // le type d'accès
    if(isset($_SESSION['idUser'])) {

        $access = $_SESSION['fonctionU']; 

        if($access != 'Administrateur' && $access != 'Salarié' && $access != 'Gestionnaire') { 

            include('../modele/deconnexion_modele.php');

        } else {
            if($access == 'Administrateur') {
                switch ($laPage) {
                    // gestion user
                    case 'globalUser':            include('listeUser_vue.php');                 break;
                    case 'modifUser':             include('modifUser_vue.php');                 break;
                    case 'delUser':               include('delUser_vue.php');                   break;
                    case 'addUser':               include('addUser_vue.php');                   break;                 
                    // gestion infrastructure
                    case 'globalIncident':        include('listeIncident_vue.php');             break;
                    case 'globalMachine':         include('listeMachine_vue.php');              break;
                    case 'globalInterventions':   include('listeInterventions_vue.php');        break;

                    default:                      include('error404_vue.php');
                }
            }

            if($access == 'Salarié') { 
                switch ($laPage) {
                    // Ticket des utilisateurs
                    case 'viewTicketU':           include('viewTicketUser_vue.php');            break;
                    case 'addTicketU' :           include('addTicketUser_vue.php');             break;

                    default:                      include('error404_vue.php');
                }
            }

            if($access == 'Gestionnaire') {
                switch ($laPage) {
                    case 'globalIncident':        include('g_incident_vue.php');                break;
                    case 'globalInterventions':   include('g_interventions_vue.php');           break;


                    default:                      include('error404_vue.php');
                }
            }
        }

    }

?>
