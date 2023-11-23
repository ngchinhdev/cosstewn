<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

class ContactModel extends PDOModel {
    function sendContactEmail($name, $email, $message) {
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->setFrom($email, $name);
        $mail->addAddress('vutin0212@gmail.com');
        $mail->Subject = 'Liên hệ từ trang web';
        $mail->Body = $message;
    
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    }
}
?>