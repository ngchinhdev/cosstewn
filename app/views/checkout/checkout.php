<div id="container_checkout" class="container">
<form id="form_wrap" action="../controller/payment.php" method="post">
    <div class="head_form">
        <a href="<?php echo $_SERVER['PHP_SELF']?>">
            <p class="mb-0"><i class="fa-sharp fa-solid fa-caret-left"></i>Mua thêm sản phẩm khác</p>
        </a>
        <p></p>
    </div>
    <div class="main_form">
        <h4 class="fs-6 fw-bold">Thông tin thanh toán</h4>
        <div class="box_name boxx">
            <input type="text" placeholder="Họ và tên" name="customer_name" class="name" value="">
            <small class="error"></small>
        </div>
        <div class="box_phone boxx">
            <input type="text" placeholder="Số điện thoại" name="phone" class="phone_num" value="">
            <small class="error"></small>
        </div>
        <div class="box_email boxx">
            <input type="text" placeholder="Email" name="email" class="email" value="">
            <small class="error"></small>
        </div>
        <div class="box_location boxx">
            <input type="text" placeholder="Địa chỉ" name="adr" class="address" value="">
            <small class="error"></small>
        </div>

       
        <div class="sum_rows">
            <div class="sum s1">
                <strong>Tổng đơn hàng: </strong>
                <?php
                // if(isset($_SESSION['prod_id'])) var_dump($_SESSION['prod_id']);
                    // if(isset($_COOKIE['user_id'])) {
                    //     $promotion = 0.95;
                    //     echo '<span class="promotion">Đã giảm 5% cho thành viên</span>';
                    // } else {
                    //     $promotion = 1;
                    //     echo '<span class="promotion">Đăng kí để được giảm 5% mỗi sản phẩm</span>';
                    // }
                ?>
            </div>
            <table class="row_prod">
                <?php 
                    $data = $products_to_pay;
                    $sumPay = 0;
                    $sumPayPro = 0;
                    foreach($data as $key => $row) {
                        $price = $data[$key]['so_luong'] * $data[$key]['gia_tien'];
                        // $sumPay += $price; 
                        // $sumPayPro += $price * $promotion;
                        $imgs = explode(',', $row['hinh_anh']);
                        echo 
                        '<tr>
                            <td class="">
                                <div class="img-prod">
                                    <img src="../../public/app/imgs/imgs-product/'.$imgs[0].'" alt="">
                                </div>
                            </td>
                            <td class="mid">
                                <div class="name-prod">
                                    '.$data[$key]['ten_sp'].'
                                </div>
                            </td>
                            <td class="">
                                <div class="quantity-prod">
                                    x <span>'.$data[$key]['so_luong'].'</span>
                                </div>
                            </td>
                            <td class="">
                                <div class="price-prod">
                                    '.number_format($price, 0, '.', '.').'
                                </div>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="sum">
            <?php
                // echo '<strong>Tổng tiền: </strong>
                //         <span><span class="org-sum">'.formatPrice($sumPay).'</span>
                //         <span>'.formatPrice($sumPayPro).'</span></span>
                // '
            ?>
        </div>
        <div class="payment">
            <input type="radio" id="banking" name="banking" value="0" checked>
            <label for="banking">Chuyển khoản ngân hàng</label>
        </div>
        <div class="payment">
            <input type="radio" id="cash" name="banking" value="1">
            <label for="cash">Trả tiền mặt khi nhận hàng</label>
        </div>
        <hr>
        <p>
            Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng của bạn, hỗ trợ trải nghiệm của bạn trên
            toàn bộ trang web và cho các mục đích khác được mô tả trong chính sách riêng tư của chúng tôi.
        </p>
        <input class="buy_btn" type="submit" value="Đặt hàng" name="order">
    </div>
</form>
</div>