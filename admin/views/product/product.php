<section id="pageProduct" class="activePaging">
    <div class="wrap-actionTop">
        <h1>Trang sản phẩm</h1>
        <div class="btn-add" id="btn-addbrand" data-control-parent="product" data-control="addproduct"> <i class="fa-solid fa-plus"></i>&ensp;Thêm mới</div>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th class="nameProduct-th">Tên sản phẩm</th>
                <th class="picProduct-th">Hình ảnh</th>
                <th>Giá gốc</th>
                <th>Giá hiện tại</th>
                <th>Số lượng</th>
                <th class="describe-th">Mô tả</th>
                <th>Ẩn/Hiện</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allProducts as $index => $row) : ?>
                <tr>
                    <td><?php $index++;
                        echo $startRow + $index; ?></td>
                    <td>
                        <div class="describe-td">
                            <?php echo $row['ten_sp']; ?>
                        </div>
                    </td>
                    <td>
                        <?php
                        $images = explode(',', $row['hinh_anh']);
                        for ($i = 0; $i < 4; $i++) : ?>
                            <img src="../../public/app/imgs/imgs-product/<?= $images[$i] ?>" alt="">
                        <?php endfor; ?>
                    </td>
                    <td><?php echo number_format($row['gia_goc'], 0, '.', '.') ?> ₫</td>
                    <td><?php echo number_format($row['gia_tien'], 0, '.', '.') ?> ₫</td>
                    <td><?php echo $row['so_luong']; ?></td>
                    <td>
                        <div class="describe-td">
                            <?php echo $row['mo_ta']; ?>
                        </div>
                    </td>

                    <td><?php
                        if ($row['an_hien'] == 1) {
                            echo 'Hiện';
                        } else {
                            echo 'Ẩn';
                        }
                        ?></td>
                    <td>
                        <div class="action-btn">
                            <div class="fix-items action-items" data-masp="<?= $row['masp'] ?>">Sửa</div>
                            <div class="remove-items action-items" data-current-page="<?php echo $pageNumber; ?>" data-remove-masp="<?= $row['masp'] ?>">Xóa</div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-container">
        <ul class="pagination pagingprd">
            <?php if ($pageNumber > 1) : ?>
                <li><a href="javascript:void(0);" class="page-link" data-number-page="1"><i class="fa-solid fa-angles-left"></i></a></li>
                <li><a href="javascript:void(0);" class="page-link" data-number-page="<?php echo $pageNumber - 1; ?>"><i class="fa-solid fa-angle-left"></i></a></li>
            <?php endif; ?>

            <?php if ($totalPages > 1) : ?>
                <li class="wrap-pagenum">
                    <a href="javascript:void(0);" class="page-num active"><?php echo $pageNumber; ?></a>
                </li>
            <?php endif; ?>
            <?php if ($pageNumber < $totalPages) : ?>
                <li><a href="javascript:void(0);" class="page-link" data-number-page="<?php echo $pageNumber + 1; ?>"><i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="javascript:void(0);" class="page-link" data-number-page="<?php echo $totalPages; ?>"><i class="fa-solid fa-angles-right"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
</section>
