<?php
    $ROOT_ADMIN = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/admin/";
    require_once $ROOT_ADMIN . "models/categoryModel/categoryModel.php";
    $category = new Category();

    if(isset($_GET['id']) && $_GET['type'] === 'edit') {
        $cate_id = $_GET['id'];
        $data = $category->getCurCategory($cate_id);

        header('Content-Type: application/json');
        echo json_encode($data);
    }

    if(isset($_POST['id']) && $_POST['type'] === 'done') {
        if(isset($_POST['id']) && $_POST['type'] === 'done') {
            $name = $_POST['name'];
            $hightlight = $_POST['hightlight'];
            $showhide = $_POST['show-hide'];
            $id = $_POST['id'];
            
            if(isset($_FILES['cate-img'])) {
                $img = $_FILES['cate-img']['name']; 
                $tempAvatarPath = $_FILES['cate-img']['tmp_name'];
                $destination = $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/public/app/imgs/" . $img;
                move_uploaded_file($tempAvatarPath, $destination);
                $category->updateCategory($name, $img, $hightlight, $showhide, $id);
            } else {
                $category->updateCategory($name, null, $hightlight, $showhide, $id);
            }

            header('Content-Type: application/json');
            echo json_encode(['status' => 'success', 'message' => 'Cập nhật loại hàng thành công!']);
        }
    }
?>