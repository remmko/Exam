<?php

function ctrlTry($request, $response, $container){

    session_start();

        $code = 'codeauth';

        $enterCode = $request-> get(INPUT_POST, "code");

        if ($enterCode == $code) {
            // Authentication successful
            $_SESSION['identified'] = "true";
            echo "Authentication successful!";
            $response -> redirect("Location: index.php?r=all");
            return $response;
        } else {
            // Authentication failed
            echo "Authentication failed. Please check your username and password.";
        }
   
}


