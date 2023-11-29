<?php

    function ctrlAll($request, $response, $container){
        if($_SESSION["identified"]=="true"){
            $getAll = $container -> getAll();
            $getAll = $getAll -> getAll();
            $response -> set("getAll",$getAll);
            $response -> setTemplate("all.php");
            return $response;
        }else{
            $response -> redirect("Location: index.php?r=auth");
            return $response;
        }
    }