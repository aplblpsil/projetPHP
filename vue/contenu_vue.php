<?php

    if(!isset($_GET['pageType']) || $_GET['pageType'] == '' ||  $_GET['pageType'] == 'accueil') {

        include('accueil_vue.php');

    } else {

        $laPage = $_GET['pageType'];

        switch ($laPage) {
            case 'connexion':       include('connexion_vue.php');          break;
            case 'inscription':     include('inscription_vue.php');        break;
            case 'gIncident':       include('g_incident_vue.php');         break;
            case 'gInterventions':  include('g_interventions_vue.php');    break;
            case 'deconnexion':     session_unset(); session_destroy(); 
                                    include('accueil_vue.php');        break;
            
            default:                include('error404_vue.php');
        }
        
    }

?>