<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/roleModel/roleModel.php";
    $role = new Role();

    if(isset($_GET['id']) && $_GET['type'] === 'edit') {
        $role_id = $_GET['id'];
        $role = $role->getCurRole($role_id);
        header('Content-Type: application/json');
        echo json_encode($role);
    }

    if(isset($_POST['id']) && $_POST['type'] === 'done') {
        $role_name = $_POST['role'];
        $id = $_POST['id'];
        
        $role->updateRole($id, $role_name);

        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Cập nhật vai trò thành công!']);
    }
?>