<div class="nav">
    <div class="above_table">
        <div class="ctg_name">
            <strong>Loại hàng</strong>
            <?php
            // if(isset($_SESSION['add-user-success'])) {
            //     echo '<span class="success">'.$_SESSION['add-user-success'].'</span>';
            //     unset($_SESSION['add-user-success']);
            // } else if(isset($_SESSION['delete-user-success'])) {
            //     echo '<span class="success">'.$_SESSION['delete-user-success'].'</span>';
            //     unset($_SESSION['delete-user-success']);
            // }  else if(isset($_SESSION['edit-user-success'])) {
            //     echo '<span class="success">'.$_SESSION['edit-user-success'].'</span>';
            //     unset($_SESSION['edit-user-success']);
            // }
            ?>
        </div>
        <div class="add-new">
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
            <td><?= $key + 1 ?></td>
            <td><?= $category['ten_loai'] ?></td>
            <td>
                <img class="avt-img" src="../../public/app/imgs/<?= $category['hinh_anh'] ?>" alt="">
            </td>
            <td><?= $category['noi_bat'] === 1 ? "Có" : "Không" ?></td>
            <td><?= $category['an_hien'] === 1 ? "Hiện" : "Ẩn" ?></td>
            <td>
                <div class="last-td">
                    <a href="views/edit_user.php?id=<?= $category['maloai'] ?>" class="change-btn">Sửa</a>
                    <a href="controllers/delete_user.php?id=<?= $category['maloai'] ?>" class="del-btn">Xóa</a>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>