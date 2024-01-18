<?php
function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["projets"] = "projets.php";
    $lesActions["contact"] = "contact.php";
    $lesActions["veille"] = "veille.php";
    $lesActions["info"] = "info.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}
?>