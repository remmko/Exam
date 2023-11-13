<?php

function ctrlAproved($request, $response, $container){
    
    if(isset($_GET["id"])){
        $get = $container -> getInscript();
        $get = $get -> getInscript($_GET["id"]);
        include "src/views/aproved.php";

    }else{
        $response -> redirect("Location: index.php");
        return $response;
    }
}