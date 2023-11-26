<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/userModel/userModel.php";
    $user = new User();

    if (isset($_GET['id']) && $_GET['type'] === 'delete') {
        $user_id = $_GET['id'];
        $data = $user->deleteUser($user_id);

        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Đã xóa người dùng!']);
}
