<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/roleModel/roleModel.php";
    $role = new Role();

    $all_roles = $role->getAllRole();
    require_once $ROOT_ADMIN . "views/role/role.php";
?>