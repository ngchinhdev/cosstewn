<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/loginModel/loginModel.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "phpmailer/phpmailer/src/PHPMailer.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "phpmailer/phpmailer/src/SMTP.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "phpmailer/phpmailer/src/Exception.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "autoload.php";

    $login = new Login();
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    if(isset($_POST['submit'])) {
        $emailFrom = $_POST["email"];
        $_SESSION['repass_email'] = $emailFrom;

        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'chinhnguyennn24@gmail.com';
            $mail->Password = 'szrx aqvp kgkj jizn';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            // $mail->SMTPOptions = array(
            //     'ssl' => array(
            //         'verify_peer' => false,
            //         'verify_peer_name' => false,
            //         'allow_self_signed' => true
            //     )
            // );

            $mail->setFrom('chinhnguyennn24@gmail.com', "Thay đổi mật khẩu");
            $mail->addAddress($emailFrom);
            // $mail->addReplyTo($emailFrom, $name);

            $mail->isHTML(true);
            $mail->Subject = 'Khôi phục mật khẩu';
            $mail->Body = '<b>Thân chào bạn!</b>
            <h3>Chúng tôi đã nhận được yêu cầu khôi phục mật khẩu từ bạn.</h3>
            <p>Vui lòng bấm vào link dưới đây để thay đổi mật khẩu mới</p>
            http://localhost/cosstewn/app/controllers/index.php?page=thay-doi-mat-khau
            <br><br>
            <p>Trân trọng cảm ơn!</p>
            ';
            // $mail->AltBody = 'This is the alternative text for non-HTML email clients.';

            $send = $mail->Send();
            echo '<script>alert("Tin nhắn đã gửi thành công!!"); window.location.href = "/cosstewn/app/controllers/index.php?page=quen-mat-khau";</script>';
        } catch (Exception $e) {
            echo 'Tin nhắn chưa được gửi! Lỗi: ' . $mail->ErrorInfo;
        }
    }
?>