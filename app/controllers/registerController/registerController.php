<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/registerModel/registerModel.php";
    $register = new Register();

    if(isset($_POST['submit'])) {
        extract($_POST);
        $name = ucwords($ho . ' ' . $ten);
        $user = $register->getInfoUser($email);

        if ($user['email'] && $user['email'] === $email) {
            echo "<script>alert('Email đã tồn tại!'); window.location.href = document.referrer;</script>";
            exit(); 
        } else if ($user['so_dien_thoai'] && $user['so_dien_thoai'] === $so_dien_thoai) {
            echo "<script>alert('Số điện thoại đã tồn tại!'); window.location.href = document.referrer;</script>";
            exit(); 
        } else {
            $id = $register->addNewUser($name, $email, $phone, $address, $repass, null);
            $id_encode = base64_encode($id);
            header("Location: ../index.php?page=ho-so&u=$id_encode");
        }
    } else {
        $data_user = $_SESSION['data_user'];
        if(isset($data_user['name']) && isset($data_user['email']) && isset($data_user['avatar'])) {
            $register->addNewUser($data_user['name'], $data_user['email'], '', '', '', $data_user['avatar']);
            header("Location: ../index.php?page=lich-su-mua");
        }
    }
?>