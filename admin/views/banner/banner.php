<div id="banner">
    <div class="nav">
        <div class="above_table">
            <div class="ctg_name">
                <strong>Banner</strong>
            </div>
            <!-- <div class="add-new">
                <a href="views/add-new-role.php" class="add-new-role">+ Thêm mới</a>
            </div> -->
        </div>
    </div>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Loại banner</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach ($all_types as $key => $type) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $cmp_array[$type['loai']] ?></td>
                <td class="last-col">
                    <div class="last-td" style="flex-direction: row; align-items: center;">
                        <a href="" class="change-btn see-detail" data-type="<?= $type['loai'] ?>">Chi tiết</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>