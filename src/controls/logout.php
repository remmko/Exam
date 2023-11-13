<?php

    function ctrlLogout($request, $response, $container){
        $_SESSION["identified"] = false;
        $response -> redirect("Location: index.php");
        return $response;
    }