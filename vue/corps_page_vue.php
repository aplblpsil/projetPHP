<?php

    if(!isset($_GET['pageType']) || $_GET['pageType'] == '' ||  $_GET['pageType'] == 'accueil') {

        include('accueil_page_vue.php');

    } else {

        $laPage = $_GET['pageType'];

        switch ($laPage) {
            case 'login':           include('login_page_vue.php');              break;
            case 'inscription':     include('inscription_page_vue.php');        break;
            case 'gIncident':       include('g_incident_page_vue.php');         break;
            case 'ginterventions':  include('g_interventions_page_vue.php');    break;
            default:                include('error404_page.php');
        }
        

    }

?>