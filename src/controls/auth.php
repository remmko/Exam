<?php

function ctrlTry($request, $response, $container){
    $code = 'codeauth'; 
    if (isset($_POST['codi']) && $_POST['codi'] == $code) {
        session_start();
        $_SESSION['identified'] = true;
        $response -> redirect("Location: index.php?r=all");
        return $response;
      
    } else {
        $response -> redirect("Location: index.php?r=auth");
       
    }
}


