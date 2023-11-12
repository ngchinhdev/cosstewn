<div id="container_login" class="container">
    <div class="register">
        <div class="text-center">
            <h1 class="title">Đăng ký tài khoản</h1>
            <span class="or">Bạn đã có tài khoản? Đăng nhập <a href="index.php?page=dang-nhap" class="link-login text-decoration-underline text-primary">tại đây</a></span>
        </div>
        <form action="#">
            <div class="ho-ten">
                <div class="form-group">
                    <label for="ho">Họ <span class="star">*</span></label>
                    <input type="text" id="ho" name="ho" placeholder="Họ" required>
                </div>
                <div class="form-group">
                    <label for="ten">Tên <span class="star">*</span></label>
                    <input type="text" id="ten" name="ten" placeholder="Tên" required>
                </div>
            </div>
            <div class="sdt-email">
                <div class="form-group">
                    <label for="so-dien-thoai">Số điện thoại:</label>
                    <input type="tel" id="so-dien-thoai" name="so-dien-thoai" placeholder="Số điện thoại" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="star">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="pass">
                <div class="form-group">
                    <label for="mat-khau">Mật khẩu <span class="star">*</span></label>
                    <input type="password" id="mat-khau" name="mat-khau" placeholder="Mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="nhap-lai-mat-khau">Nhập lại mật khẩu <span class="star">*</span></label>
                    <input type="password" id="nhap-lai-mat-khau" name="nhap-lai-mat-khau" placeholder="Nhập lại mật khẩu" required>
                </div>
            </div>
            <div class="address">
                <div class="form-group">
                    <label for="dia-chi">Địa chỉ:</label>
                    <input type="text" id="dia-chi" name="dia-chi" placeholder="Địa chỉ" required>
                </div>
            </div>
            <div class="button-register">
                <button type="submit">Đăng ký</button>
            </div>
            <div class="text-center">
                <p>Hoặc đăng nhập bằng</p>
            </div>
            <div id="wrap-social-login-plus">
                <a href="" class="btn-login-plus btn-google-login text-decoration-none me-sm-3 me-0 rounded-3">
                    <div class="me-2"><i class="fa-brands fa-google-plus-g"></i></div>
                    <div class="label-btn-login">Đăng nhập Google</div>
                </a>
                <a href="" class="btn-login-plus btn-facebook-login text-decoration-none rounded-3">
                    <div class="me-2"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="label-btn-login">Đăng nhập Facebook</div>
                </a>
            </div>
        </form>
    </div>
</div>