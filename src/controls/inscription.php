<?php
    function inscription($request, $response, $container){
        include "src/views/inscription.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $surename = $_POST['surename'];
            $address = $_POST['address'];
            $datanaix = $_POST['datanaix'];

            $file = $_FILES['file']['name'];
            $img_tmp = $_FILES['file']['tmp_name'];
            move_uploaded_file($img_tmp, "resguard/$img");
            
            $id = rand(1000000, 9999999);
          
            $inscript = $container -> inscript();
            $inscript-> inscript($name, $surename, $address, $datanaix,$id );
            $response -> redirect("Location: index.php?r=aproved&&id=".$id);
            return $response;
        }
    }