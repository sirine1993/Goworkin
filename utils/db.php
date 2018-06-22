<?php
<<<<<<< HEAD

try{
=======
try {
    $bdd = new PDO('mysql:host=localhost;dbname=goworking;charset=utf8', 'admin', 'Ucenje2018');
    // echo 'successgit';
>>>>>>> b9ccf532f1720969fb298d2a63ab01a19db1b15e
  
    $bdd=new PDO('mysql:host=localhost;dbname=goworkin_bdd;charset=utf8','sirine','online@2017');
}
catch(Exeption $e)
{      
	die('Erreur:'.$e->getMessage());
}
<<<<<<< HEAD
    

=======
 //rajouter ici votre PDO phpmyadmin promo 17
// $bdd = new PDO('mysql:localhost;dbname=goworkin;charset=utf8', 'admin', 'passwordMariaDB');
?>
>>>>>>> b9ccf532f1720969fb298d2a63ab01a19db1b15e
