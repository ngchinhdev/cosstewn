<footer class="mt-5 border-top">
    <div class="container pt-4">
        <div class="row pt-2 text-sm-start text-center">
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5">
                <img src="../../public/app/imgs/logoft.png" alt="" class="logo_footer mb-3">
                <div class="socials">
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="certificate mt-5">
                    <img src="../../public/app/imgs/noi-khong-voi-hang-gia-400x400.png" width="50" alt="Hàng không giả">
                    <img src="../../public/app/imgs/logo-da-thong-bao-bo-cong-thuong-mau-xanh.png" width="150" alt="Bộ công thương đã thông báo">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5">
                <h5 class="fw-bold text-uppercase">về chúng tôi</h5>
                <ul class="list ps-0 mt-4">
                    <li>
                        <a href="#">Về chúng tôi</a>
                    </li>
                    <li>
                        <a href="#">Câu chuyện thương hiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ & hỗ trợ</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5">
                <h5 class="fw-bold text-uppercase">Chính sách</h5>
                <ul class="list ps-0 mt-4">
                    <li>
                        <a href="#">Chính sách và quy định chung</a>
                    </li>
                    <li>
                        <a href="#">Chính sách đổi trả sản phẩm</a>
                    </li>
                    <li>
                        <a href="#">Chính sách bảo mật thông tin cá nhân</a>
                    </li>
                    <li>
                        <a href="#">Điều khoản sử dụng</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5">
                <h5 class="fw-bold text-uppercase">Đối tác và liên kết</h5>
                <ul class="list ps-0 mt-4">
                    <li>
                        <a href="https://thefaceshop.com.vn/" target="_blank">THE FACE SHOP Vietnam</a>
                    </li>
                    <li>
                        <a href="https://ahcvietnam.com/" target="_blank">AHC Vietnam</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright mt-4">
            <p class="text-center pb-3 mb-0">© by CosStewn - Dự án 1 - TKTW</p>
        </div>
    </div>
</footer>

<!-- Link bootstrap, jquery, js  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'gio-hang':
            echo '<script src="../../public/app/js/ajaxCart.js"></script>';
            break;
        case 'san-pham':
            echo '<script src="../../public/app/js/ajaxFeedback.js"></script>';
            echo '<script src="../../public/app/js/quantityDetail.js"></script>';
            echo '<script src="../../public/app/js/feedbackAjax.js"></script>';
            echo '<script src="../../public/app/js/product-detail.js"></script>';
            break;
        case 'danh-muc':
            echo '<script src="../../public/app/js/removeTagFilter.js"></script>';
            echo '<script src="../../public/app/js/pagingNumber.js"></script>';
            echo '<script src="../../public/app/js/filterOption.js"></script>';
            echo '<script src="../../public/app/js/filterRate.js"></script>';
            echo '<script src="../../public/app/js/filterPrice.js"></script>';
            echo '<script src="../../public/app/js/changewidth.js"></script>';
            break;
        case 'thanh-toan':
            echo '<script src="../../public/app/js/checkout.js"></script>';
            break;
        case 'ho-so':
            echo '<script src="../../public/app/js/profile.js"></script>';
            break;
        case 'dang-nhap':
        case 'dang-ky':
            echo '<script src="../../public/app/js/form-login.js"></script>';
            break;
        case 'thay-doi-mat-khau':
        case 'quen-mat-khau':
            echo '<script src="../../public/app/js/form-repass.js"></script>';
            break;
    }
} else {
    echo '<script src="../../public/app/js/main.js"></script>';
}
?>

    <!-- Link bootstrap, jquery, js  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?php
        if(isset($_GET['page'])) {
            switch($_GET['page']) {
                case 'san-pham':
                    echo '<script src="../../public/app/js/product-detail.js"></script>';
                    break;
                case 'thanh-toan':
                    echo '<script src="../../public/app/js/checkout.js"></script>';
                    break;
                case 'dang-nhap':
                case 'dang-ky':
                    echo '<script src="../../public/app/js/form-login.js"></script>';
                    break;
            }
        } else {
            echo '<script src="../../public/app/js/main.js"></script>';
        }
    ?>
</body>

</html>