<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/contactModel/contactModel.php";
    function sendEmail() {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $contactModel = new ContactModel();
            $result = $contactModel->sendContactEmail($name, $email, $message);

            if ($result) {
                $_SESSION['contact_message'] = "Email đã được gửi thành công.";
            } else {
                $_SESSION['contact_message'] = "Có lỗi xảy ra khi gửi email!";
            }
        }
    }
