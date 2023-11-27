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
            <td><?= $offset + $key + 1 ?></td>
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
<?php if($cur_records === $per_page ): ?>
<div class="pagination">
    <div class="left-ctrl pag-ctrl" data-pag="<?= $cur_page > 1 ? $cur_page - 1 : $cur_page ?>">
        <i class="fa-sharp fa-solid fa-chevron-left"></i>
    </div>
    <div class="pag-num">
        <?= $cur_page ?>
    </div>
    <div class="right-ctrl pag-ctrl" data-pag="<?= $cur_page <= $total_pages ? $cur_page + 1 : $cur_page ?>">
        <i class="fa-sharp fa-solid fa-chevron-right"></i>
    </div>
</div>
<?php endif ?>

<form id="edit_category" method="post" enctype="multipart/form-data">
    <h2>Cập nhật loại hàng</h2>
    <div class="fields">
        <div class="name-box box">
            <label for="name-cate">Tên loại</label>
            <input type="text" id="name-cate" placeholder="Nhập tên loại">
        </div>
    </div>
    <div class="last-box">
        <div class="cate-box">
            <label for="cate">Hình ảnh</label>
            <div class="ctn">
                <input type="file" id="cate">
                <div class="img-chose">
                    <img src="../../public/app/imgs/ahc.webp" alt="">
                </div>
            </div>
        </div>
        <div class="hightlight-box">
            <label for="hightlight">Nổi bật</label>
            <select name="" id="hightlight">
                <option value="1">Có</option>
                <option value="0">Không</option>
            </select>
        </div>
        <div class="role-box">
            <label for="hide-show">Ẩn/Hiện</label>
            <select name="" id="role">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
            </select>
        </div>
    </div>
    <div class="submit-box">
        <button type="submit" role="button">Cập nhật</button>
    </div>
</form>