<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/loginModel/loginModel.php";
    $login = new Login();

    if(isset($_POST['submit'])) {
        extract($_POST);

        $user = $login->getInfoUser($email);
        $correctPassword = $user['mat_khau'] === $password;

        if($user && $correctPassword) {
            echo "<script>window.location.href='/cosstewn/app/controllers/index.php?page=ho-so&u=" . $user['matk'] . "';</script>";
            exit();
        } else {
            $_SESSION['error'] = "Sai tai khoan hoac mat khau";
            header("Location: ../index.php?page=dang-nhap");
            exit();
        }
    } else {
        echo "<script>window.location.href='/cosstewn/app/controllers/index.php?page=ho-so&u=" . $user['matk'] . "';</script>";
        exit();
    }
?>