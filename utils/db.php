<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=goworkin;charset=utf8', 'admin', 'passwordMariaDB');
    // echo 'successgit';
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

?>