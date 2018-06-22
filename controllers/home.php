<?php
<<<<<<< HEAD
//echo 'coucou home ';
=======
>>>>>>> b9ccf532f1720969fb298d2a63ab01a19db1b15e

require_once 'vendor/autoload.php';
require_once('models/request.php');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));


echo $twig->render('home.html');