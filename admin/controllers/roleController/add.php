<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/roleModel/roleModel.php";
    $role = new Role();

    if(isset($_POST['id']) && $_POST['type'] === 'add') {
        $role_name = $_POST['role'];
        $role = $role->addNewRole($role_name);
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Thêm vai trò thành công!']);
    }
?>