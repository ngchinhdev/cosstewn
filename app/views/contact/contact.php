<?php
if (isset($_SESSION['contact_message'])) {
    echo $_SESSION['contact_message'];
    unset($_SESSION['contact_message']);
}
?>
<div id="container_contact" class="container">
    <div class="col-12">
        <iframe class="googlemap" width="100%" height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.443592406487!2d106.6252534745758!3d10.853826357762221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1699062308698!5m2!1svi!2s" width="1290" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h3 style="color: #218cff;">ĐỊA CHỈ</h3>
            <br>
            <p class="diachi">
                Công ty cổ phần SX - TM - DV CosStewn
                <br>
                MST: 321684759 - Ngày cấp: 30/10/2023
                <br>
                Showroom: <span class="not-bold">Công viên phần mềm Quang Trung, QTSC Building 1, P.Tân Chánh Hiệp,
                    Q.12, Thành phố Hồ Chí Minh, Việt Nam </span>
                <br>
                Email: <span class="not-bold">contact@cosstewn.com.vn </span>
                <br>
                Hotline: 0123456789 - 0987654321
            </p>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <h3 style="color: #218cff;">NHẬN THÔNG TIN</h3>
            <br>
            <form class="row" method="POST" action="../controllers/contactController/contactController.php">
                <div class="information1 col-6">
                    <label for="Name" class="form-label">Họ và tên:</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Nhập họ tên">
                </div>
                <div class="information1 col-6">
                    <label for="Email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Nhập email">
                </div>
                <div class="information1 form-group">
                    <label for="message">Nội dung:</label>
                    <textarea id="message" name="message" placeholder="Nhập nội dung" class="form-control" rows="8"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button type="reset" class="btn btn-outline-gray btn-md">Hủy</button>
                    <button type="submit" name="submit" class="btn btn-outline-gray btn-md">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>