<div id="user">
    <div class="nav">
        <div class="above_table">
            <div class="ctg_name">
                <strong>Người Dùng</strong>
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
                <!-- <a href="views/add_user.php">+ Thêm mới</a> -->
            </div>
        </div>
    </div>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>Avatar</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Mật khẩu</th>
            <th>Cấp bậc</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach ($all_users as $key => $user) { ?>
            <?php
            $link = str_contains($user['hinh_anh'], 'http') ? $user['hinh_anh'] : '../../public/app/imgs/' . $user['hinh_anh']
            ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $user['ho_ten'] ?></td>
                <td>
                    <img class="avt-img" src="<?= $link ?>" alt="">
                </td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['so_dien_thoai'] ?></td>
                <td><?= $user['dia_chi'] ?></td>
                <td><?= $user['mat_khau'] ?></td>
                <td><?= ($user['mavt'] === 1) ? 'admin' : 'user' ?></td>
                <td>
                    <div class="last-td">
                        <a href="views/edit_user.php?id=<?= $user['matk'] ?>" class="change-btn" data-user="<?= $user['matk'] ?>">Sửa</a>
                        <a href="controllers/delete_user.php?id=<?= $user['matk'] ?>" data-user="<?= $user['matk'] ?>" class="del-btn">Xóa</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>