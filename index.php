<?php

$action = ( isset( $_GET['action']) )? $_GET['action'] : "home";

switch ($action){

    case 'Goworkin' :
    case '/Goworkin/' :
        require_once('controllers/home.php');
        break;


    case 'about_us' :
    case 'aboutUs' :
    case 'aboutus' :
    case 'about' :
        require_once('controllers/about_us.php');
        break;


    case 'coworking':
    case 'coWorking':
        require_once('controllers/coworking.php');
        break;


    case 'contact':
        require_once('controllers/contact.php');
        break;

    case 'wifilib' :
    case 'wifiLib' :
        require_once('controllers/wifiLib.php');
        break;

        
    case 'main' :
        require_once('controllers/main.php');
        break;
    
    case 'json' :
        require_once('models/jsonPoints.php');
        break;




    default:
        require_once('controllers/home.php');
        break;
    }

?>