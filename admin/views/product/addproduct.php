<section class="box-addbrand" id="pageaddproduct">
    <h3>Thêm sản phẩm</h3>
    <?php if (!empty($error)) : ?>
        <div class="wrap-checkerr" style="color: #55343A;; background: #F7D7D9"><?php echo $error; ?></div>
    <?php elseif (!empty($success)) : ?>
        <div class="wrap-checkerr" style="color: #3A574B; background: #CFE5D9"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="nameproduct" class="form-control" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="">Giá gốc</label>
            <input type="text" name="priceOrigin" class="form-control" placeholder="Giá gốc sản phẩm">
        </div>
        <div class="form-group">
            <label for="">Giá hiện tại</label>
            <input type="text" name="priceNow" class="form-control" placeholder="Giá hiện tại sản phẩm">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" name="quantityprd" class="form-control" placeholder="Số lượng sản phẩm">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="describeprd" id="textDescribeprd" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Loại hàng</label>
            <select name="brandproduct" class="form-control">
                <option value="1">Sữa rửa mặt</option>
                <option value="2">Sữa tắm</option>
                <option value="3">Xịt khoáng</option>
                <option value="4">Nước hoa</option>
                <option value="5">Dưỡng thể</option>
                <option value="6">Dầu gội</option>
                <option value="7">Chống nắng</option>
                <option value="8">Tẩy trang</option>
                <option value="9">Son môi</option>
                <option value="10">Kem dưỡng</option>
                <option value="11">Mặt nạ</option>
                <option value="12">Serum</option>
                <option value="13">Phấn má</option>
                <option value="14">Lăn khử mùi</option>
                <option value="15">Tẩy tế bào chết</option>
                <option value="16">Phụ kiện làm đẹp</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ẩn/Hiện</label>
            <select name="statusproduct" class="form-control">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <div class="form-group form-variation">
            <label for="">Hình ảnh 1</label>
            <input type="file" name="image_variation1">
            <label for="">Hình ảnh 2</label>
            <input type="file" name="image_variation2">
            <label for="">Hình ảnh 3</label>
            <input type="file" name="image_variation3">
            <label for="">Hình ảnh 4</label>
            <input type="file" name="image_variation4">
        </div>
        <button name="addprd" class="btn btn-addprd" type="submit">Xác nhận</button>
    </form>
</section>