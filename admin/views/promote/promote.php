<section id="pagePromo" class="activePaging">
    <div class="wrap-actionTop">
        <h1>Danh sách khuyến mãi</h1>
        <div class="btn-add" id="btn-addPromo" data-control="addpromo" data-control-parent="promote"> <i class="fa-solid fa-plus"></i>&ensp;Thêm mới</div>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên khuyến mãi</th>
                <th>Giảm giá</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($infoTablePromo as $i => $row) : ?>
                <tr>
                    <td><?php $i++;
                        echo $startRow + $i; ?></td>
                    <td><?= $row['ten_km']; ?></td>
                    <td><?= number_format($row['giam_gia'], 0, '.', '.') ?> ₫</td>
                    <td><?php
                        $startdate = $row['ngay_bat_dau'];
                        $startdate = new DateTime($startdate);
                        $startdateFormat = $startdate->format('d-m-Y H:i:s');
                        echo $startdateFormat;
                        ?></td>
                    <td><?php
                        $enddate = $row['ngay_ket_thuc'];
                        $enddate = new DateTime($enddate);
                        $enddateFormat = $enddate->format('d-m-Y H:i:s');
                        echo $enddateFormat;
                        ?></td>
                    <td>
                        <button class="btn-detailPromo" data-promo-makm="<?= $row['makm']; ?>" data-promo-namekm="<?= $row['ten_km']; ?>">Chi tiết</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-container">
        <ul class="pagination pagingpromo">
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