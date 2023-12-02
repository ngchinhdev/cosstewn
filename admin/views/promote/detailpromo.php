<section id="pageDetailPromo" class="activePaging">
    <div class="wrap-actionTop">
        <h1>Chi tiết các sản phẩm được áp dụng khuyến mãi ( <?= $namekm; ?> )</h1>
        <div class="btn-add" id="btn-adddetailpromo" data-promo-namekm="<?= $namekm; ?>" data-promo-makm="<?= $makm ?>"><i class="fa-solid fa-plus"></i>&ensp;Thêm mới</div>
    </div>
    <?php if (!empty($infoProductsByMakm)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infoProductsByMakm as $i => $row) : ?>
                    <tr>
                        <td><?php $i++;
                            echo $startRow + $i; ?></td>
                        <td><?= $row['masp'] ?></td>
                        <td><?= $row['ten_sp'] ?></td>
                        <td>
                            <div class="action-btn">
                                <div class="remove-detailPromo" data-page-current="<?= $pageNumber ?>" data-promo-namekm="<?= $namekm; ?>" data-promo-masp="<?= $row['masp'] ?>" data-promo-makm="<?= $makm ?>">Xóa</div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="pagination-container">
            <ul class="pagination pagingDetailPromo" data-promo-makm="<?= $makm ?>" data-promo-namekm="<?= $namekm ?>">
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
    <?php } else { ?>
        <h4 style="text-align: center; margin-top:50px">Không có dữ liệu.</h4>
    <?php } ?>

</section>