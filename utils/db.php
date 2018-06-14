<?php
try {

    $bdd = new PDO('mysql:host=localhost;dbname=goworking;charset=utf8', 'admin', 'Ucenje2018');
    echo 'successgit';
  
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

?>