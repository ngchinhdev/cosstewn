<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/userModel/userModel.php";
    $user = new User();

    $cur_page = isset($_GET['pagNum']) ? $_GET['pagNum'] : 1;
    $per_page = 10;
    $offset = ($cur_page - 1) * $per_page;
    $total_records = $user->getCountRecords();
    $total_pages = ceil($total_records / $per_page);
    $all_users = $user->getAllUsers($per_page, $offset);
    $cur_records = count($all_users);
                
    require_once $ROOT_ADMIN . "views/user/user.php";
?>