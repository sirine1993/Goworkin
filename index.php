<?php

$action = ( isset( $_GET['action']) )? $_GET['action'] : "home";

switch ($action){

    case 'Goworking' :
    case '/Goworking/' :
        require_once('controllers/home.php');
        break;

    case 'about' :
    case 'aboutUs' :
    case 'aboutus' :
        require_once('controllers/aboutUs.php');
        break;

    case 'coworking' :
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

    default:
        require_once('controllers/home.php');
        break;
    }

?>