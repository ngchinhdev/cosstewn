<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/loginModel/loginModel.php";
    $login = new Login();

    if(isset($_POST['submit'])) {
        if(isset($_SESSION['repass_email']) && $_SESSION['repass_email']) {
            $email = $_SESSION['repass_email'];
            $newpass = hash_hmac('sha256', $_POST['repass'], 'coscoscos');

            $login->updatePassword($email, $newpass);
            echo '<script>alert("Cập nhật mật khẩu thành công!!");
                    window.location.href = "/cosstewn/app/controllers/index.php?page=dang-nhap";</script>';
        }
    }
?>