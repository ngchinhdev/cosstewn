<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $emailFrom = $_POST["email"];
    $message = $_POST["message"];

    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "phpmailer/phpmailer/src/PHPMailer.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "phpmailer/phpmailer/src/SMTP.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "phpmailer/phpmailer/src/Exception.php";

    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor/" . "autoload.php";

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'vutin0212@gmail.com';
        $mail->Password = 'dgtm roup jell ebsa';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom($emailFrom, $name);
        $mail->addAddress('vutin0212@gmail.com', 'TinDauBu');
        $mail->addReplyTo($emailFrom, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Message';
        $mail->Body = $message;
        $mail->AltBody = 'This is the alternative text for non-HTML email clients.';

        $send = $mail->Send();
        echo '<script>alert("Tin nhắn đã gửi thành công!!"); window.location.href = "http://localhost/cosstewn/app/controllers/index.php?page=lien-he";</script>';
    } catch (Exception $e) {
        echo 'Tin nhắn chưa được gửi! Lỗi: ' . $mail->ErrorInfo;
    }
}
?>