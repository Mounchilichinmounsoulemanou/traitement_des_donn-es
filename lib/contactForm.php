<?php
// $_REQUEST => récupère toutes les données envoyées avec la PAGE
// $_GET => données envoyées avec la méthode GET
// $_POST => données envoyées avec la méthode POST

// $_REQUEST["full_name"] = trim($_REQUEST["full_name"]);

// foreach ($_REQUEST as $key => $value) {
//     # code...
//     if (is_string($value)) {
//         $_REQUEST[$key] = trim($value);
//     }
// }

function trimData ($tab){
    if(is_array($tab)){
        foreach ($tab as $key => $value) {
            if (is_string($value)) {
                $tab[$key] = trim($value);
            }
        }
    }
    return $tab;
}

function checkData ($tab){
    
    $result = array();
    foreach ($tab as $key => $value) {
        $value = trim($value);
        // GENERALE
        if($value === ""){
            $result[$key] = "Le champs ".$key." n'est pas renseigné !";
        }
        // SPECIFIQUE
        if($key == "email" && !isset($result[$key])){
            $model = '/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,8}$/';
            if(preg_match($model, $value) === 0){
                $result[$key] = "Votre ".$key." ne vérifie pas le format d'email correct !";

            }
            
        }
        if($key == "age" && !isset($result[$key])){
            $model = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
            if(preg_match($model, $value) === 0){
                $result[$key] = "Votre ".$key." ne vérifie pas le format d'âge correct !";

            }
            
        }
        if($key == "message" && !isset($result[$key])){
            if(strlen($value) < 20){
                $result[$key] = "Le champs ".$key." doit faire au moins 20 caractères !";
            }
        }
        if($key == "full_name" && !isset($result[$key])){
            if(strlen($value) < 3){
                $result[$key] = "Votre nom doit avoir au moins 3 caractères !";
            }
        }
    }
    return $result;
}
