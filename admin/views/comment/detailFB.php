<section id="pageDetailFB" class="activePaging">
    <div class="wrap-actionTop">
        <h1>Chi tiết đánh giá ( <?= $namesp; ?> )</h1>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Người đánh giá</th>
                <th class="th-contentFB">Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($InfoFeedbackByMasp as $i => $row) : ?>
                <tr>
                    <td><?php $i++;
                        echo $startRow + $i; ?></td>
                    <td><?= $row['ho_ten'] ?></td>
                    <td><?= $row['noi_dung'] ?></td>
                    <td><?php
                        $datefb = $row['ngay_bl'];
                        $datefb = new DateTime($datefb);
                        $datafbFormat = $datefb->format('d-m-Y H:i:s');

                        echo $datafbFormat;
                        ?></td>
                    <td>
                        <select name="fbStatus" class="fbStatus status" data-mabl="<?= $row['mabl'] ?>" >
                            <option value="1" <?php if ($row['trang_thai'] == 1) echo 'selected'; ?>>Hiện</option>
                            <option value="0" <?php if ($row['trang_thai'] == 0) echo 'selected'; ?>>Ẩn</option>
                        </select>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-container">
        <ul class="pagination pagingDetailfb" data-fb-masp="<?= $masp; ?>" data-fb-namesp="<?= $namesp; ?>">
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