<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/categoryModel/categoryModel.php";
    $category = new Category();

    if(isset($_POST['type']) && $_POST['type'] === 'add') {
        $name = $_POST['name'];
        $hightlight = $_POST['hightlight'];
        $showhide = $_POST['show-hide'];
        $img = $_FILES['cate-img']['name']; 
        $tempAvatarPath = $_FILES['cate-img']['tmp_name'];
        $destination = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/app/imgs/" . $img;
        move_uploaded_file($tempAvatarPath, $destination);
        $category->addNewCategory($name, $hightlight, $showhide, $img);

        header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'message' => 'Cập nhật loại hàng thành công!']);
    }
?>