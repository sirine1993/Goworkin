<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=nenadp_goworkin;charset=utf8', 'nenadp', '5yaNIFGBsT');
    echo 'successgit';
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}

?>