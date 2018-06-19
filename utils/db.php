<?php
try {
    //rajouter ici votre PDO phpmyadmin promo 17
    $bdd = new PDO('mysql:localhost;dbname=goworkin_bdd;charset=utf8', 'sirine', 'online@2017');
    // echo 'successgit';
  
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

// $bdd = new PDO('mysql:localhost;dbname=goworkin;charset=utf8', 'admin', 'passwordMariaDB');

?>

