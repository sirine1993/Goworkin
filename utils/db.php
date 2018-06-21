<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=goworking;charset=utf8', 'admin', 'Ucenje2018');
    // echo 'successgit';
  
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}
 //rajouter ici votre PDO phpmyadmin promo 17
// $bdd = new PDO('mysql:localhost;dbname=goworkin;charset=utf8', 'admin', 'passwordMariaDB');
?>