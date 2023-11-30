<div id="container_login" class="container">
    <div class="text-center">
        <h1 class="title">Đăng nhập tài khoản <?php if(isset($_SESSION['error_log'])) echo $_SESSION['error_log'] ?></h1>
        <span class="or">Bạn chưa có tài khoản? Đăng ký <a href="index.php?page=dang-ky" class="link-login text-decoration-underline text-primary">tại đây</a></span>
    </div>
    <div class="login">
        <form action="loginController/loginController.php" method="post" class="form-login">
            <div class="form-group">
                <label for="email">Email <span class="star">*</span></label>
                <input type="text" id="email" name="email" placeholder="Email">
                <small class="error pt-1"></small>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu <span class="star">*</span></label>
                <input type="password" id="password" name="password" placeholder="Mật khẩu">
                <small class="error pt-1"></small>
            </div>
            <div class="button-login d-flex justify-content-center">
                <button type="submit" name="submit">Đăng Nhập</button>
            </div>
            <div class="forgot-pass">
                <a href="index.php?page=quen-mat-khau">Quên mật khẩu?</a>
            </div>
            <div class="text-center">
                <p class="oror">Hoặc đăng nhập bằng</p>
            </div>
            <div id="wrap-social-login-plus">
                <a href="<?= $client->createAuthUrl(); ?>" class="btn-login-plus btn-google-login text-decoration-none me-sm-3 me-0 ">
                    <div><i class="fa-brands fa-google-plus-g"></i></div>
                    <div class="label-btn-login">Đăng nhập Google</div>
                </a>
                <a href="<?= $helper->getLoginUrl('http://localhost/cosstewn/app/controllers/index.php?page=dang-ky', $permissions); ?>" class="btn-login-plus btn-facebook-login text-decoration-none">
                    <div><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="label-btn-login">Đăng nhập Facebook</div>
                </a>
            </div>
        </form>
    </div>
</div>