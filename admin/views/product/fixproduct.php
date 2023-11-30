<section id="pagefixproduct" data-masp="<?php echo $productByMasp['masp']; ?>">
    <h3>Cập nhật sản phẩm</h3>
    <?php if (!empty($error)) : ?>
        <div class="wrap-checkerr" style="color: #55343A;; background: #F7D7D9"><?php echo $error; ?></div>
    <?php elseif (!empty($success)) : ?>
        <div class="wrap-checkerr" style="color: #3A574B; background: #CFE5D9"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="nameproduct" class="form-control" value="<?php echo $productByMasp['ten_sp']; ?>">
        </div>
        <div class="form-group">
            <label for="">Giá gốc</label>
            <input type="text" name="priceOrigin" class="form-control" value="<?php echo $productByMasp['gia_goc']; ?>">
        </div>
        <div class="form-group">
            <label for="">Giá hiện tại</label>
            <input type="text" name="priceNow" class="form-control" value="<?php echo $productByMasp['gia_tien']; ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" name="quantityprd" class="form-control" value="<?php echo $productByMasp['so_luong']; ?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="describeprd" id="textDescribeprd" cols="30" rows="10"><?php echo $productByMasp['mo_ta']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Loại hàng</label>
            <select name="brandproduct" class="form-control">
                <option value="1" <?php if ($productByMasp['maloai'] == 1) echo 'selected'; ?>>Sữa rửa mặt</option>
                <option value="2" <?php if ($productByMasp['maloai'] == 2) echo 'selected'; ?>>Sữa tắm</option>
                <option value="3" <?php if ($productByMasp['maloai'] == 3) echo 'selected'; ?>>Xịt khoáng</option>
                <option value="4" <?php if ($productByMasp['maloai'] == 4) echo 'selected'; ?>>Nước hoa</option>
                <option value="5" <?php if ($productByMasp['maloai'] == 5) echo 'selected'; ?>>Dưỡng thể</option>
                <option value="6" <?php if ($productByMasp['maloai'] == 6) echo 'selected'; ?>>Dầu gội</option>
                <option value="7" <?php if ($productByMasp['maloai'] == 7) echo 'selected'; ?>>Chống nắng</option>
                <option value="8" <?php if ($productByMasp['maloai'] == 8) echo 'selected'; ?>>Tẩy trang</option>
                <option value="9" <?php if ($productByMasp['maloai'] == 9) echo 'selected'; ?>>Son môi</option>
                <option value="10" <?php if ($productByMasp['maloai'] == 10) echo 'selected'; ?>>Kem dưỡng</option>
                <option value="11" <?php if ($productByMasp['maloai'] == 11) echo 'selected'; ?>>Mặt nạ</option>
                <option value="12" <?php if ($productByMasp['maloai'] == 12) echo 'selected'; ?>>Serum</option>
                <option value="13" <?php if ($productByMasp['maloai'] == 13) echo 'selected'; ?>>Phấn má</option>
                <option value="14" <?php if ($productByMasp['maloai'] == 14) echo 'selected'; ?>>Lăn khử mùi</option>
                <option value="15" <?php if ($productByMasp['maloai'] == 15) echo 'selected'; ?>>Tẩy tế bào chết</option>
                <option value="16" <?php if ($productByMasp['maloai'] == 16) echo 'selected'; ?>>Phụ kiện làm đẹp</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ẩn/Hiện</label>
            <select name="statusproduct" class="form-control">
                <option value="1" <?php if ($productByMasp['an_hien'] == 1) echo 'selected'; ?>>Hiện</option>
                <option value="0" <?php if ($productByMasp['an_hien'] == 0) echo 'selected'; ?>>Ẩn</option>
            </select>
        </div>
        <?php
        $images = explode(',', $productByMasp['hinh_anh']);
        $numImages = count($images);
        ?>
        <div class="box-images" data-count-img="<?= $numImages ?>">
            <?php for ($i = 0; $i < $numImages; $i++) : ?>
                <div class="wrap-images">
                    <div class="title-image">Hình ảnh <?php $number = $i + 1;
                                                        echo $number; ?></div>
                    <img src="../../public/app/imgs/imgs-product/<?= $images[$i] ?>" alt="">
                    <div class="file-input-wrapper">
                        <label for="fileInput<?= $i ?>" class="file-input-label">Thay ảnh</label>
                        <input type="file" id="fileInput<?= $i ?>" name="image_variation<?= $i ?>">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <button name="fixprd" class="btn btn-fixprd" type="submit">Xác nhận</button>
    </form>
</section>