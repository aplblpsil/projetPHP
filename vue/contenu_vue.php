<?php

    if(!isset($_GET['pageType']) ||  $_GET['pageType'] == 'accueil') {

        include('accueil_vue.php');

    } else {
        
        // la page demandée
        $laPage = $_GET['pageType'];
        
        if($laPage == 'connexion') {
            include('connexion_vue.php');
        }
        
        // le type d'accès
        if(isset($_GET['access'])) {
            
            $access = $_GET['access'];  
            
            if($access != 'admin' && $access != 'user' && $access != 'gestion') { 
                
                include('accueil_vue.php');
                
            } else {
                if($access == 'admin') {
                    switch ($laPage) {
                        case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                        // gestion user
                        case 'globalUser':            include('listeUser_vue.php');               break;
                        case 'modifUser':             include('modifUser_vue.php');               break;
                        case 'delUser':               include('delUser_vue.php');               break;
                        case 'addUser':               include('addUser_vue.php');               break;                 
                        // gestion infrastructure
                        case 'globalIncident':        include('g_incident_vue.php');                break;

                        case 'globalInterventions':   include('g_interventions_vue.php');           break;

                        default:                      include('error404_vue.php');
                    }
                }

                if($access == 'user') { 
                    switch ($laPage) {
                        case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                        case 'viewTicketU':           include('viewTicketUser_vue.php');            break;
                        case 'addTicketU' :           include('addTicketUser_vue.php');             break;

                        default:                      include('error404_vue.php');
                    }
                }

                if($access == 'gestion') {
                    switch ($laPage) {
                        case 'deconnexion':           include('../modele/deconnexion_modele.php');  break;
                        case 'globalIncident':        include('g_incident_vue.php');                break;
                        case 'globalInterventions':   include('g_interventions_vue.php');           break;


                        default:                      include('error404_vue.php');
                    }
                }
            }
        
        }    
        
    }

?>
