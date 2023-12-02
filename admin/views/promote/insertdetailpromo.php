<section class="box-adddetailpromo box-add">
    <h3>Thêm sản phẩm được áp dụng khuyến mãi “<?= $namekm; ?>”</h3>
    <?php if (!empty($error)) : ?>
        <div class="wrap-checkerr" style="color: #55343A;; background: #F7D7D9"><?php echo $error; ?></div>
    <?php elseif (!empty($success)) : ?>
        <div class="wrap-checkerr" style="color: #3A574B; background: #CFE5D9"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group" id="form-adddetailpromo" data-makm="<?= $makm; ?>" data-namekm="<?= $namekm; ?>">
            <label for="">Sản phẩm</label>
            <select name="products" class="form-control">
                <option value="0">Sản phẩm</option>
                <?php foreach ($getAllProducts as $row) : ?>
                    <option value="<?= $row['masp']; ?>"><?= $row['ten_sp']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button name="addprd" class="btn btn-adddetailpromo" type="submit">Xác nhận</button>
    </form>
</section>