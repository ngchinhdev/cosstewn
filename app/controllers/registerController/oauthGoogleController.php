<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor" . '/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/registerModel/registerModel.php";

    // Init configuration
    $clientID = '55287002966-lng5si4mhmpef5d4o8p0srr12k439acd.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/cosstewn/app/controllers/registerController/oauthGoogleController.php';

    // Create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");

    // Authenticate code from Google OAuth Flow
    if (isset($_GET['code']) && isset($_GET['prompt'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken(json_encode($token));

        // Get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        $name = $google_account_info->name;
        $email = $google_account_info->email;
        $avatar = $google_account_info->picture;

        $data_user = array(
            "name" => $name,
            "email" => $email,
            "avatar" => $avatar
        );

        $_SESSION['data_user'] = $data_user;

        $register = new Register();
        if($register->getInfoUser($data_user['email'])) {
            require_once "../loginController/loginController.php";
        } else {
            require_once "registerController.php";
        }

        // header("Location: registerController.php");

        // $_SESSION['data_user'] = $data_user;

        // header("Location: userController.php");

    // Now you can use this profile info to create account in your website and make user logged in.
    } else {
        // echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
        // include ("../views/loginRegister.php");
    }
?>