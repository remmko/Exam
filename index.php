<?php

use Google\Service\ShoppingContent\Headers;

    error_reporting(E_ERROR | E_PARSE);
    include "src/config.php";
    include "src/controls/index.php";
    include "src/controls/inscription.php";
    include "src/controls/action.php";
    include "src/controls/all.php";
    include "src/controls/tryauth.php";
    include "src/controls/auth.php";
    include "src/controls/logout.php";


    $request = new \Emeset\Request();
    $response = new \Emeset\Response();
    $container = new \Emeset\Container($config);

    $r = $_REQUEST["r"];

    if($r==""){
        ctrlIndex($request, $response, $container);
    }else if($r=="inscription"){ 
        inscription($request, $response, $container);
    }else if($r=="aproved"){ 
        ctrlAproved($request, $response, $container);
    }else if($r=="all"){ 
        ctrlAll($request, $response, $container);
    }else if($r=="auth"){ 
        ctrlAuth($request, $response, $container);
    }else if($r=="logout"){ 
        ctrlLogout($request, $response, $container);
    }else if($r=="try"){ 
        ctrlTry($request, $response, $container);
    }


$response -> response();