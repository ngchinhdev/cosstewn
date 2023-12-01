<div id="container_catalog" class="container mt-2">
    <div class="row">
        <div class="col-12 text-link">
            <a href="index.php">Trang chủ</a> > <?php if (isset($_GET['maloai'])) {
                                                    echo $getNameBrand['ten_loai'];
                                                } else if (isset($_GET['type'])) {
                                                    echo 'Sản phẩm mới';
                                                } else if (isset($_GET['search'])) {
                                                    echo 'Tìm kiếm';
                                                } ?>
            <h1><?php if (isset($_GET['maloai'])) {
                    echo $getNameBrand['ten_loai'];
                } else if (isset($_GET['type'])) {
                    echo 'Sản phẩm mới';
                } else if (isset($_GET['search'])) { ?>
                    KẾT QUẢ TÌM KIẾM CHO “<?php echo strtoupper($_GET['search']); ?>”
                <?php } ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3 set_filter d-none d-xl-block">
            BỘ LỌC
        </div>
        <div class="col-6 col-xl-5 px-2 d-flex align-items-center justify-content-start p-0 tag-filter">
            <?php if (isset($_GET['filterOption'])) : ?><div class="box-tag">
                    <p><?php if ($_GET['filterOption'] == 'priceDesc') {
                            echo 'Giá giảm dần';
                        } else if ($_GET['filterOption'] == 'priceASC') {
                            echo 'Giá tăng dần';
                        } else {
                            echo 'Xem nhiều';
                        } ?></p>
                    <i class="fa-solid fa-xmark" onclick="removeFilterOption()"></i>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['rateRange'])) : ?><div class="box-tag">
                    <p><?php if ($_GET['rateRange'] == 'under20') {
                            echo 'Dưới 20%';
                        } else if ($_GET['rateRange'] == '20to30') {
                            echo 'Từ 20% - 30%';
                        } else if ($_GET['rateRange'] == '30to40') {
                            echo 'Từ 30% - 40%';
                        } else if ($_GET['rateRange'] == '40to50') {
                            echo 'Từ 40% - 50%';
                        } else {
                            echo 'Trên 50%';
                        } ?></p>
                    <i class="fa-solid fa-xmark" onclick="removeFilterRate()"></i>
                </div>
            <?php endif; ?>
            <?php if (isset($_GET['priceRange'])) : ?><div class="box-tag">
                    <p><?php if ($_GET['priceRange'] == 'under500k') {
                            echo 'Dưới 500.000₫';
                        } else if ($_GET['priceRange'] == '500kto1m') {
                            echo '500.000₫ - 1.000.000₫';
                        } else if ($_GET['priceRange'] == '1mto1.5m') {
                            echo '1.000.000₫ - 1.500.000₫';
                        } else if ($_GET['priceRange'] == '1.5mto2m') {
                            echo '1.500.000₫ - 2.000.000₫';
                        } else {
                            echo 'Trên 2.000.000₫';
                        } ?></p>
                    <i class="fa-solid fa-xmark" onclick="removeFilterPrice()"></i>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-6 col-xl-4 d-flex align-items-center tools-filter justify-content-end p-0">
            <div class="result-search d-md-none"><?php if ($countProducts < 1) {
                                                        echo 0;
                                                    } else {
                                                        echo $countProducts;
                                                    } ?> Kết quả</div>
            <div class="result-search d-none d-md-block"><?php if ($countProducts < 1) {
                                                                echo 0;
                                                            } else {
                                                                echo $countProducts;
                                                            } ?> Kết quả</div>
            <div class="filterBy">Lọc theo</div>
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php if (isset($_GET['filterOption']) && $_GET['filterOption'] == 'priceDesc') {
                                    echo 'Giá giảm dần';
                                } else if (isset($_GET['filterOption']) && $_GET['filterOption'] == 'priceASC') {
                                    echo 'Giá tăng dần';
                                } else if (isset($_GET['filterOption']) && $_GET['filterOption'] == 'topViews') {
                                    echo 'Xem nhiều';
                                } else {
                                    echo 'Tất cả';
                                } ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end filter-items" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item filter-option" href="#" data-filter-option="priceDesc">Giá giảm dần&ensp;<i class="fa-solid fa-arrow-down-wide-short"></i></a>
                                <a class="dropdown-item filter-option" href="#" data-filter-option="priceASC">Giá tăng dần&ensp;<i class="fa-solid fa-arrow-down-short-wide"></i></a>
                                <a class="dropdown-item filter-option" href="#" data-filter-option="topViews">Xem nhiều&ensp;<i class="fa-solid fa-eye"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-3 mt-2 d-none d-xl-block">
            <div class="container-filter">
                <div class="wrap-filter">
                    <div class="filter-price mb-2">
                        <div class="title-filter">
                            Giá sản phẩm <i class="fa-solid fa-chevron-up"></i>
                        </div>
                    </div>
                    <div class="checkbox-group">
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox" class="custom-checkbox" <?php if (isset($_GET['priceRange']) && $_GET['priceRange'] == 'under500k') echo 'checked'; ?>>
                            <label for="price-checkbox">
                                <p>Dưới 500.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox2" class="custom-checkbox" <?php if (isset($_GET['priceRange']) && $_GET['priceRange'] == '500kto1m') echo 'checked'; ?>>
                            <label for="price-checkbox2">
                                <p>500.000₫ - 1.000.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox3" class="custom-checkbox" <?php if (isset($_GET['priceRange']) && $_GET['priceRange'] == '1mto1.5m') echo 'checked'; ?>>
                            <label for="price-checkbox3">
                                <p>1.000.000₫ - 1.500.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox4" class="custom-checkbox" <?php if (isset($_GET['priceRange']) && $_GET['priceRange'] == '1.5mto2m') echo 'checked'; ?>>
                            <label for="price-checkbox4">
                                <p>1.500.000₫ - 2.000.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox5" class="custom-checkbox" <?php if (isset($_GET['priceRange']) && $_GET['priceRange'] == 'above2m') echo 'checked'; ?>>
                            <label for="price-checkbox5">
                                <p>Trên 2.000.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="wrap-filter">
                    <div class="filter-price mb-2">
                        <div class="title-filter">
                            Khuyến mãi <i class="fa-solid fa-chevron-up"></i>
                        </div>
                    </div>
                    <div class="checkbox-group checkbox-group2">
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox6" class="custom-checkbox2" <?php if (isset($_GET['rateRange']) && $_GET['rateRange'] == 'under20') echo 'checked'; ?>>
                            <label for="price-checkbox6">
                                <p>Dưới 20%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox7" class="custom-checkbox2" <?php if (isset($_GET['rateRange']) && $_GET['rateRange'] == '20to30') echo 'checked'; ?>>
                            <label for="price-checkbox7">
                                <p>Từ 20% - 30%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox8" class="custom-checkbox2" <?php if (isset($_GET['rateRange']) && $_GET['rateRange'] == '30to40') echo 'checked'; ?>>
                            <label for="price-checkbox8">
                                <p>Từ 30% - 40%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox9" class="custom-checkbox2" <?php if (isset($_GET['rateRange']) && $_GET['rateRange'] == '40to50') echo 'checked'; ?>>
                            <label for="price-checkbox9">
                                <p>Từ 40% - 50%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox10" class="custom-checkbox2" <?php if (isset($_GET['rateRange']) && $_GET['rateRange'] == 'above50') echo 'checked'; ?>>
                            <label for="price-checkbox10">
                                <p>Trên 50%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="wrap-banner"><img src="../../public/app/imgs/banner-column.png" alt=""></div>
            </div>

        </div>
        <div class="col-sm-12 col-xl-9 ">
            <div class="row d-flex" id="container-response" data-total-page="<?php echo $totalPages = ceil($countProducts / 12); ?>" data-brand-id="<?php echo isset($_GET['maloai']) ? $_GET['maloai'] : null; ?>" data-new-products="<?php echo isset($_GET['type']) ? $_GET['type'] : null; ?>" data-filter-price="<?php echo isset($_GET['priceRange']) ? $_GET['priceRange'] : null; ?>" data-filter-rate="<?php echo isset($_GET['rateRange']) ? $_GET['rateRange'] : null; ?> " data-filter-options="<?php echo isset($_GET['filterOption']) ? $_GET['filterOption'] : null; ?> ">

                <?php if ($countProducts < 1) { ?>
                    <span class="text-center">Không có sản phẩm nào được hiển thị !</span>
                <?php } else { ?>
                    <?php foreach ($productByPage as $row) : ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-1">
                            <div class="box-products">
                                <div class="wrap-imgage">
                                    <div class="watch-now">
                                        <a href="index.php?page=san-pham&masp=<?= $row['masp'] ?>&maloai=<?= $row['maloai'] ?>">Xem ngay</a>
                                    </div>
                                    <?php
                                    $images = explode(',', $row['hinh_anh']);
                                    for ($i = 0; $i < 2; $i++) : ?>
                                        <img src="../../public/app/imgs/imgs-product/<?= $images[$i] ?>" alt="">
                                    <?php endfor; ?>
                                </div>
                                <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                                <div class="card-content">
                                    <div class="text-brand"><?= $row['ten_loai'] ?></div>
                                    <div class="text-name"><?= $row['ten_sp'] ?></div>
                                    <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                                        <div class="price-now"><?= number_format($row['gia_tien'], 0, '.', '.') ?>₫</div>
                                        <div class="wrap-under d-flex justify-content-center text-center">
                                            <div class="price-origin"><?= number_format($row['gia_goc'], 0, '.', '.') ?>₫</div>
                                            <div class="sale">
                                                <div class="text-sale">-<?= ceil((($row['gia_goc'] - $row['gia_tien']) / $row['gia_goc'] * 100)) ?>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="warp-star d-flex justify-content-center align-items-center">
                                        (<i class="fa-solid fa-eye"></i>
                                        <div class="quantity-feedback"><?= $row['so_luot_xem'] ?> Lượt xem )</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                    <div class="pagination-container d-flex justify-content-center my-4">
                        <ul class="pagination">
                            <?= ($pageNumber > 1) ? '<li><a href="#" class="node-paging prev-page" data-page-num="1"><i class="fa-solid fa-angles-left"></i></a></li>' : '' ?>
                            <?= ($pageNumber > 1) ? '<li><a href="#" class="node-paging prev-page" data-page-num="' . ($pageNumber - 1) . '"><i class="fa-solid fa-chevron-left"></i></a></li>' : '' ?>
                            <?= ($totalPages > 1) ? '<li><a href="#" class="node-paging node-number active' . '" data-page-num="' . $pageNumber . '">' . $pageNumber . '</a></li>' : '' ?>
                            <?= ($pageNumber < $totalPages) ? '<li><a href="#" class="node-paging next-page" data-page-num="' . ($pageNumber + 1) . '"><i class="fa-solid fa-chevron-right"></i></a></li>' : '' ?>
                            <?= ($pageNumber < $totalPages) ? '<li><a href="#" class="node-paging prev-page" data-page-num="' . $totalPages . '"><i class="fa-solid fa-angles-right"></i></a></li>' : '' ?>
                        </ul>
                    </div>
            </div>
        <?php } ?>
        </div>

    </div>
    <div class="box-banner-catalog mt-2">
        <img src="../../public/app/imgs/banner-last1.webp" alt="" class="rounded-3">
        <img src="../../public/app/imgs/banner-last2.webp" alt="" class="rounded-3">
        <img src="../../public/app/imgs/banner-last3.webp" alt="" class="rounded-3">
        <img src="../../public/app/imgs/banner-last4.webp" alt="" class="rounded-3">
    </div>
    <div class="row pt-5">
        <div class="col-12 py-4 container-news rounded-4 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <div class="box-news px-5 ">
                <div class="title text-center">NHẬN BẢN TIN LÀM ĐẸP</div>
                <div class="sub-title text-center">Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn</div>
            </div>
            <div class="wrapper-input mx-5 mt-sm-3 mt-lg-0">
                <input placeholder="Điền email của bạn" id="subscribe-email" type="text" value="">
                <span class="input-follow"><button type="button">Theo dõi</button></span>
            </div>
        </div>
    </div>
</div>