<div id="user">
    <div class="nav">
        <div class="above_table">
            <div class="ctg_name">
                <strong>Vai trò</strong>
            </div>
            <div class="add-new">
                <a href="views/add-new-role.php" class="add-new-role">+ Thêm mới</a>
            </div>
        </div>
    </div>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Vai trò</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach ($all_roles as $key => $role) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= ucfirst($role['vai_tro']) ?></td>
                <td class="last-col">
                    <div class="last-td" style="flex-direction: row; align-items: center;">
                        <a style="margin: 0 6px 0 0;" href="views/edit_user.php?id=<?= $role['mavt'] ?>" class="change-btn change-role-btn" data-role="<?= $role['mavt'] ?>">Sửa</a>
                        <a href="controllers/delete_user.php?id=<?= $role['mavt'] ?>" data-role="<?= $role['mavt'] ?>" class="del-btn del-btn-role">Xóa</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>