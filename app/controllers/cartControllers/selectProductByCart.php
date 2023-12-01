<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/cartModel/cart.php";
$cartPage = new CartPage();

$userid = isset($_COOKIE['user_id']) ? base64_decode($_COOKIE['user_id']) : '';
$getProductsByUserId = $cartPage->getProductsByUserId($userid);
if ($getProductsByUserId) { ?>
    <tr class="nav_cart">
        <td class="ps-3 td_nav">Sản Phẩm</td>
        <td class="text-center td_nav px-3">Giá tiền</td>
        <td class="text-center td_nav px-3">Số lượng</td>
        <td class="pe-3 text-center td_nav">Thành tiền</td>
    </tr>
    <?php
    foreach ($getProductsByUserId as $row) {
    ?>
        <tr class="border-bottom" id="wraptrProduct">;
            <td class="d-flex pe-3">
                <?php
                $images = explode(',', $row['hinh_anh']);
                for ($i = 0; $i < 1; $i++) : ?>
                    <img src="../../public/app/imgs/imgs-product/<?= $images[$i] ?>" alt="" class="me-3 img_prod">
                <?php endfor; ?>
                <div class="ten">
                    <b><?php echo $row['ten_loai']; ?></b>
                    <p style="font-size: 13px;" class="mb-2"><?php echo $row['ten_sp']; ?></p>
                    <input type="hidden" value="<?= $row['masp'] ?>" name="prod_id[]">
                    <input type="hidden" value="<?php echo $row['so_luong_chitiet']; ?>" name="prod_quantity[]">
                    <a style="color: #C73130; font-size: 12px;" href="index.php?page=gio-hang&removesp=<?php echo $row['magh']; ?>">
                        <i class="fa-solid fa-square-xmark pe-1" style="color: #C73130;"></i>
                        Xóa khỏi giỏ hàng
                    </a>
                </div>
            </td>
            <td class="text-center">
                <div class="gia">
                    <b class="giaban d-block"><?php echo  number_format($row['gia_tien'], 0, '.', '.') ?> đ</b>
                    <span class="giaGoc"><?php echo number_format($row['gia_goc'], 0, '.', '.') ?> đ</span>
                </div>
            </td>
            <td class="quantity text-center">
                <input type="number" class="soLuong quantityProducts" value="<?php echo $row['so_luong_chitiet']; ?>" min="1" data-gia-tien="<?php echo $row['gia_tien']; ?>" data-id-gh="<?php echo $row['magh']; ?>">
            </td>
            <td class="text-center">
                <b class="tongTien"><?php $lastPrice =  $row['gia_tien'] * $row['so_luong_chitiet'];
                                    echo number_format($lastPrice, 0, '.', '.') ?> đ</b>
            </td>
        </tr>
<?php
    }
}
