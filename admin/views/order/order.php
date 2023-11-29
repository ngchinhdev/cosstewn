<section id="pageOrder" class="activePaging">
    <div class="wrap-actionTop">
        <h1>Danh sách đơn hàng</h1>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Người đặt</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Ngày đặt</th>
                <th>Địa chỉ</th>
                <th>Thanh Toán</th>
                <th>Trang thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($infoTableOrder as $i => $row) : ?>
                <tr>
                    <td><?php $i++;
                        echo $startRow + $i;
                        ?></td>
                    <td class="td-nameOrder"><strong>Tên:</strong> <?= $row['ho_ten'] ?><br>
                        <strong>Email:</strong> <?= $row['email'] ?><br>
                        <strong>SĐT:</strong> <?= $row['so_dien_thoai'] ?>
                    </td>
                    <td><?= $row['ten_sp'] ?> × <?= $row['soluongctdh'] ?></td>
                    <td><?php $price =  $row['gia_tien'] * $row['soluongctdh'];
                        echo number_format($price, 0, '.', '.');
                        ?> ₫</td>
                    <td><?php $ngay_dh = $row['ngay_dat_hang'];
                        $ngay_dh = new DateTime($ngay_dh);
                        $ngay_dhFormat = $ngay_dh->format('d-m-Y');
                        echo $ngay_dhFormat;
                        ?>
                    </td>
                    <td><?= $row['dia_chi'] ?></td>
                    <td>
                        <div class="wrap-formpay">
                            <?php if ($row['phuong_thuc'] == 1) { ?>
                                <div class="formpay" style="border: 1px solid #0059ff; color: #0059ff; background: #E6EEF3;">Chuyển khoản</div>
                            <?php } else { ?>
                                <div class="formpay">Tiền mặt</div>
                            <?php } ?>
                        </div>
                    </td>
                    <td>
                        <div class="wrap-status">
                            <?php if ($row['trang_thai'] == 0) { ?>
                                <div class="status-order" style="border: 1px solid #ffd453; color: #ffbf00; background: #fff4d2;">Đang xử lí</div>
                            <?php } elseif ($row['trang_thai'] == 1) { ?>
                                <div class="status-order" style="background: #dbffcc; color: #39bb02; border: 1px solid #39bb02;">Đã xác nhận</div>
                            <?php } else { ?>
                                <div class="status-order" style="background: #FDEAF0; color:#fb2d4c; border: 1px solid #fb2d4c;">Đã hủy</div>
                            <?php } ?>
                        </div>
                    </td>
                    <td>
                        <select name="orderStatus" class="orderStatus status" data-madh="<?= $row['madh'] ?>">
                            <option>Thao tác</option>
                            <option value="1">Xác nhận đơn hàng</option>
                            <option value="2">Hủy đơn hàng</option>
                        </select>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-container">
        <ul class="pagination pagingOrder">
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