<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/roleModel/roleModel.php";
    $role = new Role();

    if(isset($_POST['id']) && $_POST['type'] === 'delete') {
        $role->deleteUserContraints($_POST['id']);
        $role->deleteRole($_POST['id']);
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Đã xóa vai trò!']);
    }
?>