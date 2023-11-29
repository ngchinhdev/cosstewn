<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/detailModel/feedback.php";
$detailFeedback = new DetailFeedback();

$productId = isset($_POST['productId']) ? $_POST['productId'] : '';
$arrangeType = isset($_POST['arrangeType']) ? $_POST['arrangeType'] : '';
$exportFeedback = $detailFeedback->ExportFeedback($productId, $arrangeType);
if ($exportFeedback) {
    foreach ($exportFeedback as $row) {
?>
        <div class="wrapper-cmt col-12 mt-4">
            <div class="infor-cmt d-flex justify-content-start align-items-center">
                <img src="<?php echo $row['hinh_anh']; ?>" alt="" class="align-self-start">
                <div class="box-infor">
                    <div class="infor-top d-flex align-items-center">
                        <div class="infor-name">
                            <?php echo $row['ho_ten']; ?>
                        </div>
                        <div class="infor-date">
                            <?php $ngay_bl = $row['ngay_bl'];
                            $ngay_bl = new DateTime($ngay_bl);
                            $ngay_blformat = $ngay_bl->format('d-m-Y H:i:s');
                            echo $ngay_blformat;
                            ?>
                        </div>
                        <div class="check-buy">
                            <i class="fa-solid fa-check"></i>Đã mua hàng
                        </div>
                    </div>
                    <div class="text-cmt">
                        <?php echo $row['noi_dung']; ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
