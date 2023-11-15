<div id="container_login" class="container">
    <div class="register">
        <div class="text-center">
            <h1 class="title">Đăng ký tài khoản</h1>
            <span class="or">Bạn đã có tài khoản? Đăng nhập <a href="index.php?page=dang-nhap" class="link-login text-decoration-underline text-primary">tại đây</a></span>
        </div>
        <form action="registerController/registerController.php" method="post" class="form-register">
            <div class="ho-ten">
                <div class="form-group">
                    <label for="ho">Họ <span class="star">*</span></label>
                    <input type="text" id="ho" name="ho" placeholder="Họ">
                    <small class="error pt-1"></small>
                </div>
                <div class="form-group">
                    <label for="ten">Tên <span class="star">*</span></label>
                    <input type="text" id="ten" name="ten" placeholder="Tên">
                    <small class="error pt-1"></small>
                </div>
            </div>
            <div class="sdt-email">
                <div class="form-group">
                    <label for="email">Email <span class="star">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Email">
                    <small class="error pt-1"></small>
                </div>
                <div class="form-group">
                    <label for="so-dien-thoai">Số điện thoại:</label>
                    <input type="tel" id="so-dien-thoai" name="phone" placeholder="Số điện thoại" >
                    <small class="error pt-1"></small>
                </div>
            </div>
            <div class="pass">
                <div class="form-group">
                    <label for="mat-khau">Mật khẩu <span class="star">*</span></label>
                    <input type="password" id="mat-khau" name="password" placeholder="Mật khẩu">
                    <small class="error pt-1"></small>
                </div>
                <div class="form-group">
                    <label for="nhap-lai-mat-khau">Nhập lại mật khẩu <span class="star">*</span></label>
                    <input type="password" id="nhap-lai-mat-khau" name="repass" placeholder="Nhập lại mật khẩu">
                    <small class="error pt-1"></small>
                </div>
            </div>
            <div class="address">
                <div class="form-group">
                    <label for="dia-chi">Địa chỉ:</label>
                    <input type="text" id="dia-chi" name="address" placeholder="Địa chỉ" >
                </div>
            </div>
            <div class="button-register">
                <button type="submit" name="submit">Đăng ký</button>
            </div>
            <div class="text-center">
                <p>Hoặc đăng nhập bằng</p>
            </div>
            <div id="wrap-social-login-plus">
                <a href="<?= $client->createAuthUrl(); ?>" class="btn-login-plus btn-google-login text-decoration-none me-sm-3 me-0 rounded-3">
                    <div class="me-2"><i class="fa-brands fa-google-plus-g"></i></div>
                    <div class="label-btn-login">Đăng ký với Google</div>
                </a>
                <a href="<?= $helper->getLoginUrl('http://localhost/cosstewn/app/controllers/index.php?page=dang-ky', $permissions); ?> " class="btn-login-plus btn-facebook-login text-decoration-none rounded-3">
                    <div class="me-2"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="label-btn-login">Đăng ký với Facebook</div>
                </a>
            </div>
        </form>
    </div>
</div>
