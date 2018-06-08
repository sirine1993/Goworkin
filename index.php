<?php

$action = ( isset( $_GET['action']) )? $_GET['action'] : "home";

switch ($action){

case 'home':
require_once('controllers/home.php');
break;

default:
require_once('controllers/home.php');
}