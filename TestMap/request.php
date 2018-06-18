<?php

require_once('bdd.php');


function loadspots(){
    

    global $bdd;
    $response=$bdd->prepare("SELECT * FROM `SPOTS`");
    $response->execute();
    $result=$response->fetchAll(PDO::FETCH_ASSOC);
    
    
     return $result;
     
}



function loadwifi(){
    

    global $bdd;
    $response=$bdd->prepare("SELECT * FROM `WIFILIBS`");
    $response->execute();
    $result=$response->fetchAll(PDO::FETCH_ASSOC);
    
    
     return $result;
     
}


function proxifind($longUser, $latUser){

    $filtrelongUserMax = ($longUser + 1.00020);
    $filtrelongUserMin = ($longUser - 1.00020);

    $filtrelatUserMax = ($latUser + 1.00020);
    $filtrelatUserMin = ($latUser - 1.00020);

    global $bdd;
    $response=$bdd->prepare("SELECT * FROM `WIFILIBS` WHERE wifilib_lat > (:filtrelatUserMin) and wifilib_long > (:filtrelongUserMin) and wifilib_long < (:filtrelongUserMax) and wifilib_lat < (:filtrelatUserMax)");
    $response->bindParam(":filtrelatUserMin", $filtrelatUserMin, PDO::PARAM_INT);
    $response->bindParam(":filtrelongUserMin", $filtrelongUserMin , PDO::PARAM_INT);
    $response->bindParam(":filtrelongUserMax", $filtrelongUserMax, PDO::PARAM_INT);
    $response->bindParam(":filtrelatUserMax", $filtrelatUserMax, PDO::PARAM_INT);
    $response->execute();
    $filtered=$response->fetchAll(PDO::FETCH_ASSOC);

//     echo"filtremaxlong:depuis fonction => ";
//     var_dump($filtrelongUserMax);
// echo "<br>";
//     echo"filtremaxlat:depuis fonction => ";
//     var_dump($filtrelatUserMax);

    return $filtered;
     
}


