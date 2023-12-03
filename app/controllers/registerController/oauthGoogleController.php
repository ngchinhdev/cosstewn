<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/cosstewn/configs/urls.php';
    require_once $VENDOR_URL . 'autoload.php';
    require_once $URL_APP_MODEL . "registerModel/registerModel.php";

    // Init configuration
    $clientID = '360323551262-999ocd21m5tnvul5gh318nsslsvtmkmp.apps.googleusercontent.com';
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
        $user = $register->getInfoUser($email);
        if($user['matk']) {
            require_once $URL_APP_CONTROLLER . "loginController/loginController.php";
        } else {
            require_once $URL_APP_CONTROLLER . "registerController/registerController.php";
        }
    } else {
        // echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
        // include ("../views/loginRegister.php");
    }
?>