<?php
try {
    //rajouter ici votre PDO phpmyadmin promo 17
    // $bdd = new PDO('mysql:localhost;dbname=goworkin;charset=utf8', 'admin', 'passwordMariaDB');
    $bdd = new PDO('mysql:sebastianz@localhost;dbname=goworkin;charset=utf8', 'sebastianz', 'NM83uHiGZQ');
    // echo 'successgit';
  
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

// $bdd = new PDO('mysql:localhost;dbname=goworkin;charset=utf8', 'admin', 'passwordMariaDB');

?>

