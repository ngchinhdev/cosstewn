<div class="nav">
    <div class="above_table">
        <div class="ctg_name">
            <strong>Loại hàng</strong>
        </div>
        <div class="add-new-cate add-new">
            <a href="views/add_user.php">+ Thêm mới</a>
        </div>
    </div>
</div>
<table border="1">
    <tr>
        <th>#</th>
        <th>Tên loại</th>
        <th>Ảnh</th>
        <th>Nổi bật</th>
        <th>Ẩn/Hiện</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($all_categories as $key => $category) { ?>
        <tr>
            <td><?= $offset + $key + 1 ?></td>
            <td><?= $category['ten_loai'] ?></td>
            <td>
                <img class="avt-img" src="../../public/app/imgs/<?= $category['hinh_anh'] ?>" alt="">
            </td>
            <td><?= $category['noi_bat'] === 1 ? "Có" : "Không" ?></td>
            <td><?= $category['an_hien'] === 1 ? "Hiện" : "Ẩn" ?></td>
            <td>
                <div class="last-td">
                    <a href="views/edit_user.php?id=<?= $category['maloai'] ?>" class="change-btn change-cate-btn" data-cate="<?= $category['maloai'] ?>">Sửa</a>
                    <a href="controllers/delete_user.php?id=<?= $category['maloai'] ?>" data-cate="<?= $category['maloai'] ?>" class="del-btn del-btn-cate">Xóa</a>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>
<div class="pagination">
    <div class="left-ctrl pag-ctrl" data-pag="<?= $cur_page > 1 ? $cur_page - 1 : $cur_page ?>">
        <i class="fa-sharp fa-solid fa-chevron-left"></i>
    </div>
    <div class="pag-num">
        <?= $cur_page ?>
    </div>
    <div class="right-ctrl pag-ctrl" data-pag="<?= $cur_page < $total_pages ? $cur_page + 1 : $cur_page ?>">
        <i class="fa-sharp fa-solid fa-chevron-right"></i>
    </div>
</div>