<?php

try {
    //rajouter ici votre PDO phpmyadmin promo 17
    $bdd = new PDO('mysql:xxxxxxxxxx;dbname=xxxxxx;charset=utf8', 'xxxxxx', 'xxxxxx');
    // echo 'successgit';
}

catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

?>