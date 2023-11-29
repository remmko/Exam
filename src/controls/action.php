<?php

function ctrlAproved($request, $response, $container){
    
    if(isset($_GET["id"])){
        $get = $container -> getInscript();
        $get = $get -> getInscript($_GET["id"]);
        $response -> setTemplate("aproved.php");
        return $response;

    }else{
        $response -> redirect("Location: index.php");
        return $response;
    }
}