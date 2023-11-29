<?php
    function ctrlAuth($request, $response, $container){
        $response -> setTemplate( "auth.php");
        return $response;
    }