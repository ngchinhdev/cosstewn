<div id="container_home" class="container">
    <div class="banner_top mt-2">
        <div class="row">
            <div class="left_site col-sm-8 align-self-stretch">
                <div id="carouselExampleIndicators" class="carousel slide rounded-3 overflow-hidden" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($banners_slider as $index => $banner) : ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : '' ?>">
                                <img class="d-block w-100" src="../../public/app/imgs/banners/<?= $banner['duong_dan'] ?>" alt="Slide">
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="right-site col-sm-4 d-flex flex-column justify-content-between">
                <?php for($i = 0; $i < 2; $i++): ?>
                    <img src="../../public/app/imgs/banners/<?= $next_slider_banners[$i]['duong_dan'] ?>" alt="Banner <?= $i + 1 ?>" class="rounded-3 w-100 h-100 d-none d-sm-flex">
                <?php endfor ?>
                <!-- <img src="../../public/app/imgs/bn2.webp" alt="Banner 2" class="rounded-3 w-100 d-none d-sm-flex">
                <img src="../../public/app/imgs/bn3.webp" alt="Banner 3" class="rounded-3 w-100 d-none d-sm-flex"> -->
            </div>
        </div>
    </div>
    <!-- Flash Sale Section -->
    <div class="flashsale mt-4 p-3 rounded-3">
        <div class="top_info position-relative">
            <div class="title text-lg-center text-sm-start text-center">
                <img src="../../public/app/imgs/flash-sale-moi-ngay.png" alt="Flash Sale">
            </div>
            <div class="timer position-absolute top-0 end-0">
                <div class="container-segment ms-2">
                    <div class="segment-title text-light text-uppercase mb-1">Giờ</div>
                    <div class="segment text-primary">
                        <div class="flip-card mx-1" data-hours-tens>
                            <div class="top">0</div>
                            <div class="bottom">0</div>
                        </div>
                        <div class="flip-card" data-hours-ones>
                            <div class="top">0</div>
                            <div class="bottom">0</div>
                        </div>
                    </div>
                </div>
                <div class="container-segment ms-2">
                    <div class="segment-title text-light text-uppercase mb-1">Phút</div>
                    <div class="segment text-primary">
                        <div class="flip-card mx-1" data-minutes-tens>
                            <div class="top">0</div>
                            <div class="bottom">0</div>
                        </div>
                        <div class="flip-card" data-minutes-ones>
                            <div class="top">0</div>
                            <div class="bottom">0</div>
                        </div>
                    </div>
                </div>
                <div class="container-segment ms-2">
                    <div class="segment-title text-light text-uppercase mb-1">Giây</div>
                    <div class="segment text-primary">
                        <div class="flip-card mx-1" data-seconds-tens>
                            <div class="top">0</div>
                            <div class="bottom">0</div>
                        </div>
                        <div class="flip-card" data-seconds-ones>
                            <div class="top">0</div>
                            <div class="bottom">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-lg-4 mt-sm-5 mt-2 pt-2 px-2">
            <?php foreach ($flash_sale_prods as $product) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-1 p-1">
                    <div class="box-products">
                        <div class="wrap-imgage">
                            <div class="watch-now"><a href="index.php?page=san-pham&masp=<?php echo $product['masp'] ?>&maloai=<?php echo $product['maloai'] ?>">Xem ngay</a></div>
                            <?php $images = explode(',', $product['hinh_anh']); ?>
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="">
                            <?php } ?>
                        </div>
                        <?php echo $product['giam_gia'] ? '<div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>' : '' ?>
                        <div class="card-content">
                            <div class="text-brand"><?php echo $product['ten_loai'] ?></div>
                            <div class="text-name"><?php echo $product['ten_sp'] ?></div>
                            <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                                <div class="price-now"><?= number_format($product['gia_tien'], 0, '.', '.') ?>₫</div>
                                <div class="wrap-under d-flex justify-content-center text-center">
                                    <div class="price-origin"><?= number_format($product['gia_goc'], 0, '.', '.') ?>₫</div>
                                    <div class="sale">
                                        <div class="text-sale">-<?= ceil((($product['gia_goc'] - $product['gia_tien']) / $product['gia_goc'] * 100)) ?>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="warp-star d-flex justify-content-center align-items-center">
                                (<i class="fa-solid fa-eye"></i>
                                <div class="quantity-feedback"><?php echo $product['so_luot_xem'] ?> Lượt xem )</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Flash Sale Section -->
    <div class="partnerships mt-4">
        <?php foreach ($banners_brand as $index => $banner) : ?>
            <img src="../../public/app/imgs/banners/<?= $banner['duong_dan'] ?>" alt="Banner <?= $index ?>" class="rounded-2">
        <?php endforeach ?>
    </div>
    <!-- New Product Section -->
    <div class="new_product mt-4">
        <h4 class="text-uppercase fw-bold text-center">Sản phẩm mới ra mắt</h4>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 px-sm-0 px-2 mt-4">
            <?php foreach ($new_products as $product) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-1 p-1">
                    <div class="box-products">
                        <div class="wrap-imgage">
                            <div class="watch-now"><a href="index.php?page=san-pham&masp=<?php echo $product['masp'] ?>&maloai=<?php echo $product['maloai'] ?>">Xem ngay</a></div>
                            <?php $images = explode(',', $product['hinh_anh']); ?>
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="">
                            <?php } ?>
                        </div>
                        <?php echo $product['giam_gia'] ? '<div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>' : '' ?>
                        <div class="card-content">
                            <div class="text-brand"><?php echo $product['ten_loai'] ?></div>
                            <div class="text-name"><?php echo $product['ten_sp'] ?></div>
                            <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                                <div class="price-now"><?= number_format($product['gia_tien'], 0, '.', '.') ?>₫</div>
                                <div class="wrap-under d-flex justify-content-center text-center">
                                    <div class="price-origin"><?= number_format($product['gia_goc'], 0, '.', '.') ?>₫</div>
                                    <div class="sale">
                                        <div class="text-sale">-<?= ceil((($product['gia_goc'] - $product['gia_tien']) / $product['gia_goc'] * 100)) ?>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="warp-star d-flex justify-content-center align-items-center">
                                (<i class="fa-solid fa-eye"></i>
                                <div class="quantity-feedback"><?php echo $product['so_luot_xem'] ?> Lượt xem )</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-md-12 text-center mt-3">
            <a href="index.php?page=danh-muc&type=san-pham-moi" class="see_all-btn bg-transparent py-2 px-4 fw-bold rounded-5 text-decoration-none d-inline-block border-1">Xem
                tất cả</a>
        </div>
    </div>
    <!-- 3 Banner Section -->
    <div class="sub_banner mt-3 pt-1">
        <div class="row mt-3">
            <?php foreach ($banners_partner as $index => $banner) : ?>
                <div class="col-md-4 col-6">
                    <img src="../../public/app/imgs/banners/<?= $banner['duong_dan'] ?>" alt="Banner partner <?= $index ?>" class="rounded-3 w-100 mt-3 mt-lg-0">
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Category Section -->
    <div class="category mt-4 pt-3" id="category">
        <h4 class="text-uppercase fw-bold text-center">Danh mục nổi bật</h4>
        <div class="category_row mt-4">
            <?php foreach ($hightlight_categories as $category) : ?>
                <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                    <a href="index.php?page=danh-muc&maloai=<?= $category['maloai'] ?>" class="position-absolute w-100 h-100 top-0 start-0"></a>
                    <img src="../../public/app/imgs/<?= $category['hinh_anh'] ?>" alt="" class="">
                    <p><?= $category['ten_loai'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Popular Products Section -->
    <div class="popular_products mt-5">
        <h4 class="text-uppercase fw-bold text-center">Được xem nhiều nhất</h4>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 px-sm-0 px-2 mt-4">
            <?php foreach ($best_watched_products as $product) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-1 p-1">
                    <div class="box-products">
                        <div class="wrap-imgage">
                            <div class="watch-now"><a href="index.php?page=san-pham&masp=<?php echo $product['masp'] ?>&maloai=<?php echo $product['maloai'] ?>">Xem ngay</a></div>
                            <?php $images = explode(',', $product['hinh_anh']); ?>
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="">
                            <?php } ?>
                        </div>
                        <?php echo $product['giam_gia'] ? '<div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>' : '' ?>
                        <div class="card-content">
                            <div class="text-brand"><?php echo $product['ten_loai'] ?></div>
                            <div class="text-name"><?php echo $product['ten_sp'] ?></div>
                            <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                                <div class="price-now"><?= number_format($product['gia_tien'], 0, '.', '.') ?>₫</div>
                                <div class="wrap-under d-flex justify-content-center text-center">
                                    <div class="price-origin"><?= number_format($product['gia_goc'], 0, '.', '.') ?>₫</div>
                                    <div class="sale">
                                        <div class="text-sale">-<?= ceil((($product['gia_goc'] - $product['gia_tien']) / $product['gia_goc'] * 100)) ?>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="warp-star d-flex justify-content-center align-items-center">
                                (<i class="fa-solid fa-eye"></i>
                                <div class="quantity-feedback"><?php echo $product['so_luot_xem'] ?> Lượt xem )</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-md-12 text-center mt-3">
            <a href="index.php?page=danh-muc&mostView=xem-nhieu-nhat" class="see_all-btn bg-transparent py-2 px-4 fw-bold rounded-5 text-decoration-none d-inline-block border-1">Xem
                tất cả</a>
        </div>
    </div>
    <div class="last_banner mt-5">
        <img src="../../public/app/imgs/<?= $last_banner['duong_dan'] ?>" alt="Banner Cuoi" class="w-100 rounded-3">
    </div>
    <!-- Foryou Products Section -->
    <div class="foryou_products mt-5">
        <h4 class="text-uppercase fw-bold text-center">Sản phẩm dành cho bạn</h4>
        <div class="row  row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 px-sm-0 px-2 mt-4">
            <?php foreach ($for_you_products as $product) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-1 p-1">
                    <div class="box-products">
                        <div class="wrap-imgage">
                            <div class="watch-now"><a href="index.php?page=san-pham&masp=<?php echo $product['masp'] ?>&maloai=<?php echo $product['maloai'] ?>">Xem ngay</a></div>
                            <?php $images = explode(',', $product['hinh_anh']); ?>
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="">
                            <?php } ?>
                        </div>
                        <?php echo $product['giam_gia'] ? '<div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>' : '' ?>
                        <div class="card-content">
                            <div class="text-brand"><?php echo $product['ten_loai'] ?></div>
                            <div class="text-name"><?php echo $product['ten_sp'] ?></div>
                            <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                                <div class="price-now"><?= number_format($product['gia_tien'], 0, '.', '.') ?>₫</div>
                                <div class="wrap-under d-flex justify-content-center text-center">
                                    <div class="price-origin"><?= number_format($product['gia_goc'], 0, '.', '.') ?>₫</div>
                                    <div class="sale">
                                        <div class="text-sale">-<?= ceil((($product['gia_goc'] - $product['gia_tien']) / $product['gia_goc'] * 100)) ?>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="warp-star d-flex justify-content-center align-items-center">
                                (<i class="fa-solid fa-eye"></i>
                                <div class="quantity-feedback"><?php echo $product['so_luot_xem'] ?> Lượt xem )</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-md-12 text-center mt-3">
            <a href="index.php?page=danh-muc&type=san-pham-moi&priceRange=under500k" class="see_all-btn bg-transparent py-2 px-4 fw-bold rounded-5 text-decoration-none d-inline-block border-1">Xem
                tất cả
            </a>
        </div>
    </div>
    <!-- Best Search Section -->
    <div class="best_search mt-5">
        <h4 class="text-uppercase fw-bold text-center">Tìm kiếm nhiều nhất</h4>
        <div class="keywords mt-4 text-center">
            <a href="index.php?page=danh-muc&maloai=9" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">son môi</a>
            <a href="index.php?page=danh-muc&maloai=8" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">tẩy trang</a>
            <a href="index.php?page=danh-muc&maloai=1" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">sữa rửa mặt</a>
            <a href="index.php?page=danh-muc&maloai=15" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">chăm sóc da</a>
            <a href="index.php?page=danh-muc&maloai=6" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">dầu gội</a>
            <a href="index.php?page=danh-muc&maloai=1" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">sữa rửa mặt</a>
            <a href="index.php?page=danh-muc&maloai=12" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">serum</a>
            <a href="index.php?page=danh-muc&maloai=2" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">sữa tắm</a>
            <a href="index.php?page=danh-muc&maloai=7" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">chống nắng</a>
            <a href="index.php?page=danh-muc&maloai=15" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">tẩy tế bào</a>
            <a href="index.php?page=danh-muc&maloai=3" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">xịt khoáng</a>
        </div>
    </div>
</div>