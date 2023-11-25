<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/userModel/userModel.php";
    $user = new User();

    $all_users = $user->getAllUsers();
                
    require_once $ROOT_ADMIN . "views/user/user.php";
?>