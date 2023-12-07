<?php
    if(!isset($products_to_pay)) return '';
?>

<div id="container_checkout" class="container">
<form id="form_wrap" action="../controllers/checkoutController/completeCheckout.php" method="post">
    <div class="head_form">
        <a href="<?php echo $_SERVER['PHP_SELF']?>">
            <p class="mb-0"><i class="fa-sharp fa-solid fa-caret-left"></i>Mua thêm sản phẩm khác</p>
        </a>
        <p></p>
    </div>
    <div class="main_form">
        <h4 class="fs-6 fw-bold">Thông tin thanh toán</h4>
        <div class="box_name boxx">
            <input type="text" placeholder="Họ và tên" name="customer_name" class="name" value="<?= isset($user) ? $user['ho_ten'] : '' ?>">
            <small class="error"></small>
        </div>
        <div class="box_phone boxx">
            <input type="text" placeholder="Số điện thoại" name="phone" class="phone_num" value="<?= isset($user) ? $user['so_dien_thoai'] : '' ?>">
            <small class="error"></small>
        </div>
        <div class="box_email boxx">
            <input type="text" placeholder="Email" name="email" class="email" value="<?= isset($user) ? $user['email'] : '' ?>">
            <small class="error"></small>
        </div>
        <div class="box_location boxx">
            <input type="text" placeholder="Địa chỉ" name="adr" class="address" value="<?= isset($user) ? $user['dia_chi'] : '' ?>">
            <small class="error"></small>
        </div>

       
        <div class="sum_rows">
            <div class="sum s1">
                <strong>Tổng đơn hàng: </strong>
                <?php
                    $promotion = 0;
                    if(isset($_SESSION['promotion']) && $_SESSION['promotion']){
                        $promotion = $_SESSION['promotion'];
                        echo "<span class='promotion'>Đã giảm giá " .number_format($_SESSION['promotion'], 0, '.', '.')."₫</span>";
                    };
                ?>
            </div>
            <table class="row_prod">
                <?php 
                    if(isset($products_to_pay)) {
                        $data = $products_to_pay;
                        $sumPay = 0;
                        $sumPayPro = 0;
                        foreach($data as $key => $row) {
                            $quantity = isset($product_quantity[$key]) ? $product_quantity[$key] : $_SESSION['quantity_dt'];
                            $price = $quantity * $data[$key]['gia_tien'];
                            $sumPay += $price; 
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
                                        x <span>'.$quantity.'</span>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="price-prod">
                                        <div>'.number_format($price, 0, '.', '.').'₫</div>
                                        <input type="hidden" value="'. $price .'" name="price[]" />
                                        <div class="pro_pro">- '. (number_format(isset($total_promo[$key]) ? $total_promo[$key] * $quantity : $promotion, 0, '.', '.')) .'₫</div>
                                        <input type="hidden" value="'. (isset($total_promo[$key]) ? $total_promo[$key] * $quantity : $promotion) .'" name="promotion[]" />
                                    </div>
                                </td>
                            </tr>';
                        }
                    }
                ?>
            </table>
        </div>
        <div class="sum">
            <?php
                echo '<strong>Tổng tiền: </strong>';
                if ($promotion !== 0) {
                    echo '<span><del class="org-sum">' . number_format($sumPay, 0, '.', '.') . '₫</del>';
                }
                echo '<span class="ps-2">' . number_format($sumPay - $promotion, 0, '.', '.') . '₫</span>';
                echo '</span>';
            ?>
        </div>
        <div class="payment">
            <div class="d-flex">
                <input type="radio" id="banking" name="banking" value="0" checked>
                <label for="banking">Thanh toán VNPAY</label>
            </div>
            <div class="vnpay">
                <img src="../../public/app/imgs/vnpay.png" alt="">
            </div>
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
        <input type="hidden" name="sum_payment" value="<?= $sumPay - $promotion ?>">
        <input class="buy_btn" type="submit" value="Đặt hàng" name="checkout_order">
    </div>
</form>
</div>