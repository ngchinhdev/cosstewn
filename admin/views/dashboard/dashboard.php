<div id="dashboard">
    <h1>Trang thống kê</h1>
    <div class="four-col">
        <div class="col col-1">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-user-large"></i>
            </div>
            <div class="number">
                <?= $user_quantity ?>
            </div>
            <h3 class="title">
                Khách hàng
            </h3>
            <div class="more-info">
                Xem thêm <i class="fa-sharp fa-solid fa-circle-arrow-right"></i>
            </div>
        </div>
        <div class="col col-2">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-bag-shopping"></i>
            </div>
            <div class="number">
                <?= $category_quantity ?>
            </div>
            <h3 class="title">
                Danh mục
            </h3>
            <div class="more-info">
                Xem thêm <i class="fa-sharp fa-solid fa-circle-arrow-right"></i>
            </div>
        </div>
        <div class="col col-3">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-money-check-dollar"></i>
            </div>
            <div class="number">
                <?= $prod_quantity ?>
            </div>
            <h3 class="title">
                Sản phẩm
            </h3>
            <div class="more-info">
                Xem thêm <i class="fa-sharp fa-solid fa-circle-arrow-right"></i>
            </div>
        </div>
        <div class="col col-4">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-table-list"></i>
            </div>
            <div class="number">
                <?= $order_quantity ?>
            </div>
            <h3 class="title">
                Hóa đơn
            </h3>
            <div class="more-info">
                Xem thêm <i class="fa-sharp fa-solid fa-circle-arrow-right"></i>
            </div>
        </div>
    </div>
    <div class="two-col">
        <div class="col">
            <div class="title">
                <h3>Khách hàng VÀNG</h3>
            </div>
            <div class="content">
                <table class="">
                    <tr>
                        <th></th>
                        <th>Họ tên</th>
                        <th>SĐT</th>
                    </tr>
                    <?php foreach ($top_inventory as $key => $inventory) { ?>
                        <tr>
                            <td><?= $key + 1 ?>. </td>
                            <td>
                                <img class="avt-img" src="../../public/app/imgs/<?= $inventory['hinh_anh'] ?>" alt="">
                            </td>
                            <td><?= $inventory['ten_sp'] ?></td>
                            <td><?= $inventory['so_luong'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="col">
            <div class="title">
                <h3>Sản phẩm bán chạy nhất</h3>
            </div>
            <div class="content">
                <table class="">
                    <tr>
                        <th></th>
                        <th>Ảnh</th>
                        <th>Tên SP</th>
                        <th>Số lượng</th>
                    </tr>
                    <?php foreach ($top_inventory as $key => $inventory) { ?>
                        <?php $hinh_anh = explode(',', $inventory['hinh_anh']) ?>
                        <tr>
                            <td><?= $key + 1 ?>. </td>
                            <td>
                                <img class="avt-img" src="../../public/app/imgs/imgs-product/<?= $hinh_anh[0] ?>" alt="">
                            </td>
                            <td><?= $inventory['ten_sp'] ?></td>
                            <td><?= $inventory['so_luong'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>