<div class="container" id="container_cart">
    <span style="color: #888; font-size: 14px;">
        <a href="" style="color: #888;" class="text-decoration-none">Trang chủ</a> > <a href="" style="color: #888;" class="text-decoration-none">Giỏ hàng</a>
    </span>
    <h2 style="font-size: 22px;" class="mb-4 mt-2">Giỏ hàng
        <span style="color: #888; font-size: 18px;" class="fw-normal">(<?php if (isset($_COOKIE['user_id'])) {
                                                                            if ($totalQuantity > 0) {
                                                                                echo $totalQuantity;
                                                                            } else if ($totalQuantity < 1) {
                                                                                echo 0;
                                                                            }
                                                                        } else if (!isset($_COOKIE['user_id'])) {
                                                                            echo 0;
                                                                        } ?> sản phẩm)</span>
    </h2>
    <form action="/cosstewn/app/controllers/index.php?page=thanh-toan" method="post" class="row">
        <?php if (!isset($_COOKIE['user_id']) || $totalQuantity < 1) { ?>
            <div class="cart-empty d-flex justify-content-center align-items-center">
                <div class="wrap-empty">
                    <img src="../../public/app/imgs/img-prods/img_lb_empty.gif" alt="">
                    <p>Bạn chưa chọn sản phẩm.</p>
                    <a href="index.php">Tiếp tục mua sắm</a>
                </div>
            </div>
        <?php } else { ?>
            <div class="left_site col-lg-9 col-12" id="cartForm" data-id-user="<?php echo $matk; ?>">
                <table class="w-100" id="tableCart">
                    <!-- <tr class="nav_cart">
                        <td class="ps-3 td_nav">Sản Phẩm</td>
                        <td class="text-center td_nav px-3">Giá tiền</td>
                        <td class="text-center td_nav px-3">Số lượng</td>
                        <td class="pe-3 text-center td_nav">Thành tiền</td>
                    </tr> -->

                    <!-- Sản phẩm -->
                </table>
                <div class="bottom_cart col-8 d-flex justify-content-between mt-4 position-relative w-100">
                    <div class="mt-auto">
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="text-decoration-none" style="font-size: 14px; color: #218CFF;"><i class="fa-solid fa-caret-left me-2"></i>Tiếp tục mua hàng</a>
                    </div>
                    <div class="text-end">
                        <span class="pe-1 fw-bold">Tạm tính: </span>
                        <b style="color: #F7452E;" class="ms-1 tongCong"> </b>
                        <p style="color: #888;" class="text-end mb-2">(Đã bao gồm VAT)</p>
                        <button name="checkout-cart" style="font-size: 14px; padding: 8px 47px;" id="checkoutBtn" class="hero-btn">Tiến hành đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 px-sm-5 px-lg-0 mt-sm-2 mt-lg-0">
                <div class="bill-container w-100">
                    <h4 class="fw-bold text-center mt-0" style="font-size: 20px;">Hóa đơn của bạn</h4>
                    <ul>
                        <li>Tạm tính: <b class="tongCong"> </b></li>
                        <li>Giảm giá: <b class="promoPrice"> </b></li>
                        <p style="color: #888; font-size: 0.9rem; margin-top: 8px;" class="mb-1">Khuyến mãi đã nhận được:</p>
                        <li>Không có</li>
                    </ul>
                    <hr>
                    <div class="box-lastprice">Tổng cộng: <b style="color: #F7452E;" class="lastPrice"> </b></div>
                    <div style="color: #888;" class="mt-1">(Đã bao gồm VAT)</div>
                    <button name="checkout-cart" style="font-size: 0.9rem;" id="checkoutBtn" class="hero-btn mt-2 w-100">Tiến hành đặt hàng</button>
                </div>
            </div>
        <?php } ?>
    </form>
</div>