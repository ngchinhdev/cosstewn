<?php if(isset($_SESSION['repass_email']) && $_SESSION['repass_email']): ?>
<?php session_destroy() ?>
<div id="container_login" class="container">
    <div class="text-center">
        <h1 class="title">Thay đổi mật khẩu</h1>
    </div>
    <div class="login">
        <form action="loginController/newPassword.php" method="post" class="form-change-pass">
            <div class="form-group">
                <label for="pass">Mật khẩu mới <span class="star">*</span></label>
                <input type="text" id="pass" name="pass" placeholder="Mật khẩu mới">
                <small class="error pt-1"></small>
            </div>
            <div class="form-group">
                <label for="repass">Nhập lại mật khẩu <span class="star">*</span></label>
                <input type="text" id="repass" name="repass" placeholder="Mật khẩu mới">
                <small class="error pt-1"></small>
            </div>
            <div class="button-login d-flex justify-content-center">
                <button type="submit" name="submit">Xác nhận</button>
            </div>
        </form>
    </div>
</div>
<?php endif ?>
<?php if(!isset($_SESSION['repass_email'])) {
    echo "<script>window.location.href='/cosstewn/app/controllers/index.php?page=dang-nhap'</script>";
}
?>