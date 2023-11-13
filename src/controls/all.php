<?php

    function ctrlAll($request, $response, $container){
        if($_SESSION["identified"]){

            $getAll = $container -> getAll();
            $getAll = $getAll -> getAll();
            include "src/views/all.php";
        }else{
            $response -> redirect("Location: index.php?r=auth");
            return $response;
        }
    }