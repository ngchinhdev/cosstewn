<section class="box-addpromo box-add" id="pageaddproduct">
    <h3>Thêm khuyến mãi</h3>
    <?php if (!empty($error)) : ?>
        <div class="wrap-checkerr" style="color: #55343A;; background: #F7D7D9"><?php echo $error; ?></div>
    <?php elseif (!empty($success)) : ?>
        <div class="wrap-checkerr" style="color: #3A574B; background: #CFE5D9"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
            <label for="">Tên khuyến mãi</label>
            <input type="text" name="namepromo" class="form-control" placeholder="Tên khuyến mãi">
        </div>
        <div class="form-group">
            <label for="">Giảm giá</label>
            <input type="text" name="pricepromo" class="form-control" placeholder="Số tiền giảm giá">
        </div>
        <div class="form-group">
            <label for="">Ngày bắt đầu</label>
            <input type="datetime-local" name="startdate">
        </div>
        <div class="form-group">
            <label for="">Ngày kết thúc</label>
            <input type="datetime-local" name="enddate">
        </div>
        <button name="addpromo" class="btn btn-addpromo" type="submit">Xác nhận</button>
    </form>
</section>
