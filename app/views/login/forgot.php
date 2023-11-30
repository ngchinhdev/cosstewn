<div id="container_login" class="container">
    <div class="text-center">
        <h1 class="title">Thay đổi mật khẩu</h1>
        <span class="or">Bạn đã có tài khoản? Đăng nhập <a href="index.php?page=dang-nhap" class="link-login text-decoration-underline text-primary">tại đây</a></span>
    </div>
    <div class="login">
        <form action="loginController/forgotPassword.php" method="post" class="form-forgot">
            <div class="form-group">
                <label for="email">Email <span class="star">*</span></label>
                <input type="text" id="email" name="email" placeholder="Email">
                <small class="error pt-1"></small>
            </div>
            <div class="button-login d-flex justify-content-center">
                <button type="submit" name="submit">Gửi email xác nhận</button>
            </div>
        </form>
    </div>
</div>