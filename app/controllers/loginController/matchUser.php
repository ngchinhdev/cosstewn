<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/loginModel/loginModel.php";
    $login = new Login();
    
    $all_id_user = $login->getAllUserId();
    $all_id = [];
    for ($i=0; $i < count($all_id_user); $i++) { 
        array_push($all_id, $all_id_user[$i]['matk']);
    }
?>