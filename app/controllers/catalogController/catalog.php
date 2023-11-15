<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/app/" . "models/catalogModel/catalog.php";
$catagoryProducts = new CatalogProducts();
$countProducts = $catagoryProducts->getTotalProducts($maloai, $newProducts);
if (isset($_POST['pageNumber']) || isset($_POST['newProduct']) || isset($_POST['brandId'])) {
    $pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : 1;
    $brandId = isset($_POST['brandId']) ? $_POST['brandId'] : '';
    $newProduct = isset($_POST['newProducts']) ? $_POST['newProducts'] : '';
    $totalPages = isset($_POST['totalpage']) ? $_POST['totalpage'] : '';
    $productByPage = $catagoryProducts->getProductsByCategory($brandId, $newProduct, $pageNumber, $page_size = 12);
    $htmlResponse = '';

    foreach ($productByPage as $row) {
        $htmlResponse .= '<div class="col-sm-6 col-md-4 col-lg-3 mb-1 p-1">';
        $htmlResponse .= '<div class="box-products">';
        $htmlResponse .= '<div class="wrap-imgage">';
        $htmlResponse .= '<div class="watch-now">';
        $htmlResponse .= '<a href="index.php?page=san-pham&masp=' . $row['masp'] . '&maloai=' . $row['maloai'] . '">Xem ngay</a>';
        $htmlResponse .= '</div>';
        $images = explode(',', $row['hinh_anh']);
        for ($i = 0; $i < 2; $i++) {
            $htmlResponse .= '<img src="../../public/app/imgs/img-prods/' . $images[$i] . '" alt="">';
        }
        $htmlResponse .= '</div>';
        $htmlResponse .= '<div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>';
        $htmlResponse .= '<div class="card-content">';
        $htmlResponse .= '<div class="text-brand">' . $row['ten_loai'] . '</div>';
        $htmlResponse .= '<div class="text-name">' . $row['ten_sp'] . '</div>';
        $htmlResponse .= '<div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">';
        $htmlResponse .= '<div class="price-now">' . number_format($row['gia_tien'], 0, '.', '.') . '₫</div>';
        $htmlResponse .= '<div class="wrap-under d-flex justify-content-center text-center">';
        $htmlResponse .= '<div class="price-origin">' . number_format($row['gia_goc'], 0, '.', '.') . '₫</div>';
        $htmlResponse .= '<div class="sale">';
        $htmlResponse .= '<div class="text-sale">-' . ceil((($row['gia_goc'] - $row['gia_tien']) / $row['gia_goc'] * 100)) . '%</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '<div class="warp-star d-flex justify-content-center align-items-center">';
        $htmlResponse .= '(<i class="fa-solid fa-eye"></i>';
        $htmlResponse .= '<div class="quantity-feedback">' . $row['so_luot_xem'] . ' Lượt xem )</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '</div>';
        $htmlResponse .= '</div>';
        $htmlPagination = '<div class="pagination-container d-flex justify-content-center my-4">
                    <ul class="pagination">';
        $htmlPagination .= ($pageNumber > 1) ? '<li><a class="node-paging prev-page" data-page-prev="' . ($pageNumber - 1) . '"><i class="fa-solid fa-chevron-left"></i></a></li>' : '';
        for ($i = 1; $i <= $totalPages; $i++) {
            $isActive = ($i == $pageNumber) ? ' active' : '';
            $htmlPagination .= ($totalPages > 1) ? '<li><a class="node-paging node-number' . $isActive . '" data-page-num="' . $i . '">' . $i . '</a></li>' : '';
        }
        $htmlPagination .= ($pageNumber < $totalPages) ? '<li><a class="node-paging next-page" data-page-next="' . ($pageNumber + 1) . '"><i class="fa-solid fa-chevron-right"></i></a></li>' : '';

        $htmlPagination .= '</ul>
                </div>';
    }

    echo $htmlResponse;
    echo $htmlPagination;
}
