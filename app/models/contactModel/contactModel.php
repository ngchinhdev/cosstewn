<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

class ContactModel extends PDOModel {
    function sendContactEmail($name, $email, $message) {
        $to = 'vutin0212@gmail.com';
        $subject = 'Liên hệ từ trang web';
        $body = "Tên: $name\n\nEmail: $email\n\nNội dung:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            return true;
        } else {
            return false;
        }
    }
}
?>