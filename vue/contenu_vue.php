<?php

    if(!isset($_GET['pageType']) ||  $_GET['pageType'] == 'accueil') {

        include('accueil_vue.php');

    } else {
        // la page demandée
        $laPage = $_GET['pageType']; 
        // le type d'accès
        if(isset($_GET['access'])) {
            $access = $_GET['access'];  
        
            if($access == 'admin') {
                switch ($laPage) {
                    case 'connexion':             include('connexion_vue.php');                 break;
                    case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                    case 'inscription':           include('inscription_vue.php');               break;
                    case 'globalIncident':        include('g_incident_vue.php');                break;
                    case 'globalInterventions':   include('g_interventions_vue.php');           break;

                    default:                      include('error404_vue.php');
                }
            }

            if($access == 'user') { 
                switch ($laPage) {
                    case 'connexion':             include('connexion_vue.php');                 break;
                    case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                    case 'viewTicketU':           include('viewTicketUser_vue.php');            break;
                    case 'viewTicketU':           include('viewTicketUser_vue.php');            break;
                    case 'addTicketU' :           include('addTicketUser_vue.php');             break;

                    default:                      include('error404_vue.php');
                }
            }

            if($access == 'gestionnaire') {
                switch ($laPage) {
                    case 'connexion':             include('connexion_vue.php');                 break;
                    case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                    case 'globalIncident':        include('g_incident_vue.php');                break;
                    case 'globalInterventions':   include('g_interventions_vue.php');           break;
                    

                    default:                      include('error404_vue.php');
                }
            }
        
        } else {
            include('connexion_vue.php');
        }
        
        
        
        
    }

?>
