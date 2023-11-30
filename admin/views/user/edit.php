<form id="edit_user" method="post" enctype="multipart/form-data">
    <h2>Cập nhật người dùng</h2>
    <div class="fields">
        <div class="name-box box">
            <label for="name">Họ tên <span style="color: red;">(*)</span></label>
            <input type="text" id="name" placeholder="Nhập họ tên" class="req">
        </div>
        <div class="email-box box">
            <label for="email">Email <span style="color: red;">(*)</span></label>
            <input type="email" id="email" placeholder="Nhập email" class="req">
        </div>
        <div class="phone-box box">
            <label for="phone">Số điện thoại</label>
            <input type="text" id="phone" placeholder="Nhập số điện thoại">
        </div>
        <div class="adr-box box">
            <label for="adr">Địa chỉ</label>
            <input type="text" id="adr" placeholder="Nhập địa chỉ">
        </div>
        <div class="pass-box box">
            <label for="pass">Mật khẩu (>= 5 ký tự)</label>
            <input type="text" id="pass" placeholder="Nhập mật khẩu">
        </div>
    </div>
    <div class="last-box">
        <div class="avt-box">
            <label for="avt">Hình ảnh</label>
            <div class="ctn">
                <label for="avt" class="choose">Chọn hình</label>
                <input type="file" id="avt">
                <div class="img-chose">
                    <img src="../../public/app/imgs/ahc.webp" alt="">
                </div>
            </div>
        </div>
        <div class="role-box">
            <label for="role">Vai trò</label>
            <select name="" id="role">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
    </div>
    <div class="submit-box">
        <button type="submit" role="button">Cập nhật</button>
    </div>
</form>