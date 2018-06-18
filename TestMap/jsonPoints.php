<?php

require_once('request.php');
//CHARGEMENT DES ESPACES COWORKING //////////////////////////////////////////////


// $result = loadspots();

// foreach($result as $row){

//     $tags[] = array(
//         'type' => 'Feature',
//         'properties' => array(
//             'Name'=> $row['spot_name'],
//             "altitudeMode" => null, 
//             "timestamp" => null, 
//             "begin" => null, 
//             'description' => $row['spot_website'],
//             "end" => null,  
//             "tessellate" => -1, 
//             "extrude" => 0, 
//             "visibility" => -1, 
//             "drawOrder" => null, 
//             "icon" => null,  
//             "gx_media_links" => "https:\/\/lh5.googleusercontent.com\/proxy\/PwzaoEtpj9kY8ksmwgTK0mcQz7npvj7P1OwSZczMk91Q1eNBiYshL7fb5MR-7Q5vi7Jarb9VnPtSRabIgOpQRPWwcUGYk1rQ1s4_FetP8c-4sclEu4HjT0grwHuC-wH9TSdHGu3ShQ6J"
//         ),
//         'geometry' => array(
//             'type' => "Point",
//             'coordinates' => array(floatval(
//                 $row['spot_long']),
//                 floatval($row['spot_lat']),
//                 floatval('0.0')
//             )
//         )
//     );
//     }

//     echo json_encode($tags);

/// CHARGEMENT DES WIFILIBS ///////////////////////////////////////
if((isset($_POST["lat"]))&&(isset($_POST["long"]))){

$longUser = $_POST["long"];
$latUser = $_POST["lat"];
}

if((isset($latUser))&&(isset($longUser))){

    $filtered = proxifind($longUser, $latUser);

    foreach($filtered as  $row){
    

        $tags[] = array(
            'type' => 'Feature',
            'properties' => array(
                'Name'=> $row['wifilib_name'],
                "altitudeMode" => null, 
                "timestamp" => null, 
                "begin" => null, 
                'description' => null, //$row['spot_website']\\
                "end" => null,  
                "tessellate" => -1, 
                "extrude" => 0, 
                "visibility" => -1, 
                "drawOrder" => null, 
                "icon" => null,  
                "gx_media_links" => "https:\/\/lh5.googleusercontent.com\/proxy\/PwzaoEtpj9kY8ksmwgTK0mcQz7npvj7P1OwSZczMk91Q1eNBiYshL7fb5MR-7Q5vi7Jarb9VnPtSRabIgOpQRPWwcUGYk1rQ1s4_FetP8c-4sclEu4HjT0grwHuC-wH9TSdHGu3ShQ6J"
            ),
            'geometry' => array(
                'type' => "Point",
                'coordinates' => array(floatval(
                    $row['wifilib_long']),
                    floatval($row['wifilib_lat']),
                    floatval('0.0')
                )
            )
        );
        }
    
        echo json_encode($tags);
}else

{
$result = loadwifi();

foreach($result as $row){


    $tags[] = array(
        'type' => 'Feature',
        'properties' => array(
            'Name'=> $row['wifilib_name'],
            "altitudeMode" => null, 
            "timestamp" => null, 
            "begin" => null, 
            'description' => null, //$row['spot_website']\\
            "end" => null,  
            "tessellate" => -1, 
            "extrude" => 0, 
            "visibility" => -1, 
            "drawOrder" => null, 
            "icon" => null,  
            "gx_media_links" => "https:\/\/lh5.googleusercontent.com\/proxy\/PwzaoEtpj9kY8ksmwgTK0mcQz7npvj7P1OwSZczMk91Q1eNBiYshL7fb5MR-7Q5vi7Jarb9VnPtSRabIgOpQRPWwcUGYk1rQ1s4_FetP8c-4sclEu4HjT0grwHuC-wH9TSdHGu3ShQ6J"
        ),
        'geometry' => array(
            'type' => "Point",
            'coordinates' => array(floatval(
                $row['wifilib_long']),
                floatval($row['wifilib_lat']),
                floatval('0.0')
            )
        )
    );
    }

    echo json_encode($tags);}
?>