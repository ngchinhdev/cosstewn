<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/categoryModel/categoryModel.php";
    $category = new Category();

    if (isset($_GET['id']) && $_GET['type'] === 'delete') {
        $cate_id = $_GET['id'];
        $category->updateProdWhenDeleteCategory($cate_id);
        $category->deleteCategory($cate_id);

        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Đã xóa loại hàng!']);
}