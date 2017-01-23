<?php

    if(!isset($_GET['pageType']) || $_GET['pageType'] == '' ||  $_GET['pageType'] == 'accueil') {

        include('accueil_vue.php');

    } else {

        $laPage = $_GET['pageType'];

        switch ($laPage) {
            case 'connexion' :            include('connexion_vue.php');          break;
            case 'inscription' :          include('inscription_vue.php');        break;
            case 'globalIncident' :       include('g_incident_vue.php');         break;
            case 'globalInterventions' :  include('g_interventions_vue.php');    break;
            case 'viewTicketU' :          include('viewTicketUser_vue.php');     break;
            case 'addTicketU' :           include('addTicketUser_vue.php');      break;
            
            default:                include('error404_vue.php');
        }
        
    }

?>