<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/vendor" . '/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/registerModel/registerModel.php";

    $fb = new \Facebook\Facebook([
        'app_id' => '346573231243408',
        'app_secret' => 'bebea82035f7b2b765c1ebdfaf669fd5',
        'default_graph_version' => 'v2.10'
    ]);
    
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email']; // Optional permissions

    try {
        if (isset($_SESSION['facebook_access_token'])) {
            $accessToken = $_SESSION['facebook_access_token'];
        } else {
            $accessToken = $helper->getAccessToken();
        }
    } catch (Facebook\Exceptions\facebookResponseException $e) {
        // When Graph returns an error
        // echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        // echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    if (isset($accessToken)) {
        // Logged in!
        if (isset($_SESSION['facebook_access_token'])) {
            //Now you can redirect to another page and use the
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
        } else {
            // getting short-lived access token
            $_SESSION['facebook_access_token'] = (string) $accessToken;
            // OAuth 2.0 client handler
            $oAuth2Client = $fb->getOAuth2Client();
            // Exchanges a short-lived access token for a long-lived one
            $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
            $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
            // setting default access token to be used in script
            $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
        }
        // redirect the user to the account page if it has "code" GET variable
        if (isset($_GET['code']) && isset($_GET['state'])) {
            try {
                $_SESSION['user_id'] = '';
                $_SESSION['user_name'] = '';
                $_SESSION['user_email_address'] = '';
                $_SESSION['user_image'] = '';

                $graph_response = $fb->get("/me?fields=name,email", $accessToken);

                $facebook_user_info = $graph_response->getGraphUser();

                if (!empty($facebook_user_info['id'])) {
                    $_SESSION['user_image'] = 'http://graph.facebook.com/' . $facebook_user_info['id'] . '/picture';
                }

                if (!empty($facebook_user_info['name'])) {
                    $_SESSION['user_name'] = $facebook_user_info['name'];
                }

                if (!empty($facebook_user_info['email'])) {
                    $_SESSION['user_email_address'] = $facebook_user_info['email'];
                }

                $data_user = array(
                    "name" => $_SESSION['user_name'],
                    "email" => $_SESSION['user_email_address'],
                    "avatar" => $_SESSION['user_image']
                );

                $_SESSION['data_user'] = $data_user;
                $register = new Register();
                $user = $register->getInfoUser($_SESSION['user_email_address']);
                if ($register->getInfoUser($_SESSION['user_email_address'])) {
                    require_once "loginController/loginController.php";
                } else {
                    require_once "registerController.php";
                }

                
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                // echo 'Graph returned an error: ' . $e->getMessage();
                // session_destroy();
                // redirecting user back to app login page
                // header("Location: index.php");
                exit;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                // validation fails or other issues
                // echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        } else {
            // Get login url
            // $permissions = ['email']; // Optional permissions
            // $facebook_login_url = $helper->getLoginUrl('http://localhost/cosstewn/app/controllers/index.php?page=dang-ky', $permissions);
        }
    }
?>