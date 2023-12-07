<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/userModel/userModel.php";
    $user = new User();

    if(isset($_GET['id']) && $_GET['type'] === 'edit') {
        $user_id = $_GET['id'];
        $all_users = $user->getCurUser($user_id);
        $roles = $user->getAllRoles();
        $data = array(
            'user' => $all_users,
            'roles' => $roles
        );

        header('Content-Type: application/json');
        echo json_encode($data);
    }

    if(isset($_POST['id']) && $_POST['type'] === 'done') {
        if(isset($_POST['id']) && $_POST['type'] === 'done') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $adr = $_POST['adr'];
            $pass = hash_hmac('sha256', $_POST['pass'], 'coscoscos');
            $role = $_POST['role'];
            $id = $_POST['id'];
            
            if(isset($_FILES['avt'])) {
                $avatar = $_FILES['avt']['name']; 
                $tempAvatarPath = $_FILES['avt']['tmp_name'];
                $destination = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/app/imgs/" . $avatar;
                move_uploaded_file($tempAvatarPath, $destination);
                $user->updateUserAvt($name, $email, $phone, $adr, $pass, $avatar, $role, $id);
            } else {
                $user->updateUser($name, $email, $phone, $adr, $pass, $role, $id);
            }

            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Cập nhật người dùng thành công!']);
        }
    }
?>