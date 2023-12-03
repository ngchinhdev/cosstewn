<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/loginModel/loginModel.php";
    $login = new Login();

    if(isset($_POST['submit'])) {
        extract($_POST);

        $user = $login->getInfoUser($email);
        // $correctPassword = password_verify(trim($password), trim($user['mat_khau']));
        // $correctPassword = $password === $user['mat_khau'];
        if ($user) {
            $correctPassword = hash_hmac('sha256', trim($password), 'coscoscos') === $user['mat_khau'];
            // var_dump($correctPassword);
            // echo hash_hmac('sha256', trim($password), 'coscoscos');

            if ($user && $correctPassword) {
                echo "<script>window.location.href='/cosstewn/app/controllers/index.php?page=ho-so&u=" . base64_encode($user['matk']) . "';</script>";
                exit();
            } else {
                // $_SESSION['error_log'] = "Sai tai khoan hoac mat khau";
                echo "<script>alert('Sai email hoặc mật khẩu!'); window.location.href = document.referrer;</script>";
                // header("Location: ../index.php?page=dang-nhap");
                exit();
            }
        } else {
            // $_SESSION['error_log'] = "Sai tai khoan hoac mat khau";
            echo "<script>alert('Sai email hoặc mật khẩu!'); window.location.href = document.referrer;</script>";
            // header("Location: ../index.php?page=dang-nhap");
            exit();
        }
    } else {
        // echo 2222;
        // var_dump(dirname(__FILE__));
        // header("Location: /cosstewn/app/controllers/index.php?page=ho-so&u=" . base64_encode($user['matk']));
        echo "<script>window.location.href='/cosstewn/app/controllers/index.php?page=ho-so&u=" . base64_encode($user['matk']) . "';</script>";
        exit();
    }
?>