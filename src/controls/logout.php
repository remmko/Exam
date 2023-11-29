<?php
    function ctrlLogout($request, $response, $container){
        print
        $_SESSION["identified"] = "false";
        $response -> redirect("Location: index.php");
        return $response;
    }