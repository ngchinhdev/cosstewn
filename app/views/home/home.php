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
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../../public/app/imgs/bn1.webp" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../public/app/imgs/bn2.webp" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../public/app/imgs/bn3.webp" alt="Third slide">
                        </div>
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
                <img src="../../public/app/imgs/bn2.webp" alt="Banner 2" class="rounded-3 w-100 d-none d-sm-flex">
                <img src="../../public/app/imgs/bn3.webp" alt="Banner 3" class="rounded-3 w-100 d-none d-sm-flex">
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
                            <div class="top">2</div>
                            <div class="bottom">2</div>
                        </div>
                        <div class="flip-card" data-hours-ones>
                            <div class="top">4</div>
                            <div class="bottom">4</div>
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
                <div class="mb-1 p-1">
                    <div class="box-products">
                        <div class="wrap-imgage">
                            <div class="watch-now"><a href="index.php?page=san-pham">Xem ngay</a></div>
                            <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                            <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                        </div>
                        <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                        <div class="card-content">
                            <div class="text-brand">CLUB CLIO</div>
                            <div class="text-name"><?= $product['ten_sp'] ?></div>
                            <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                                <div class="price-now"><?= number_format($product['gia_tien'], 0, '.', '.') ?>₫</div>
                                <div class="wrap-under d-flex justify-content-center text-center">
                                    <div class="price-origin"><?= number_format($product['gia_goc'], 0, '.', '.') ?>₫</div>
                                    <div class="sale">
                                        <div class="text-sale"><?= ceil((($product['gia_goc'] - $product['gia_tien']) / $product['gia_goc'] * 100)) ?>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="warp-star d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <div class="quantity-feedback">(40)</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="index.php?page=san-pham">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Flash Sale Section -->
    <div class="partnerships mt-4">
        <img src="../../public/app/imgs/bb1.webp" alt="" class="rounded-2">
        <img src="../../public/app/imgs/ahc.webp" alt="" class="rounded-2">
        <img src="../../public/app/imgs/skinfood.webp" alt="" class="rounded-2">
        <img src="../../public/app/imgs/stylelip.webp" alt="" class="rounded-2">
        <img src="../../public/app/imgs/ohui.webp" alt="" class="rounded-2">
        <img src="../../public/app/imgs/colui.webp" alt="" class="rounded-2">
        <img src="../../public/app/imgs/cosrx.webp" alt="" class="rounded-2">
    </div>
    <!-- New Product Section -->
    <div class="new_product mt-4">
        <h4 class="text-uppercase fw-bold text-center">Sản phẩm mới ra mắt</h4>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 px-sm-0 px-2 mt-4">
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <a href="#" class="see_all-btn bg-transparent py-2 px-4 fw-bold rounded-5 text-decoration-none d-inline-block border-1">Xem
                tất cả</a>
        </div>
    </div>
    <!-- 3 Banner Section -->
    <div class="sub_banner mt-3 pt-1">
        <div class="row mt-3">
            <div class="col-md-4 col-6">
                <img src="../../public/app/imgs/bnn.webp" class="rounded-3 w-100" alt="">
            </div>
            <div class="col-md-4 col-6">
                <img src="../../public/app/imgs/thefaceshop.webp" class="rounded-3 w-100" alt="">
            </div>
            <div class="col-md-4 col-6 d-none d-md-block">
                <img src="../../public/app/imgs/ahc2.webp" class="rounded-3 w-100" alt="">
            </div>
        </div>
    </div>
    <!-- Category Section -->
    <div class="category mt-4 pt-3" id="category">
        <h4 class="text-uppercase fw-bold text-center">Danh mục nổi bật</h4>
        <div class="category_row mt-4">
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/cate.webp" alt="" class="">
                <p>Serum</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/matna.webp" alt="" class="">
                <p>Mặt nạ</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/kemduongmat.webp" alt="" class="">
                <p>Kem dưỡng mắt</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/sonkem.webp" alt="" class="">
                <p>Son kem</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/suaruamat.webp" alt="" class="">
                <p>Sữa rửa mặt</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/taytrang.jpg" alt="" class="">
                <p>Tẩy trang</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/suaatam.jpg" alt="" class="">
                <p>Sữa tắm</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/chongnag.webp" alt="" class="">
                <p>Chống nắng</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/duongthe.webp" alt="" class="">
                <p>Dưỡng thể</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/nuochoa.webp" alt="" class="">
                <p>Nước hoa</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/daugoi.webp" alt="" class="">
                <p>Dầu gội</p>
            </div>
            <div class="category_item p-2 text-center border border-1 rounded-3 position-relative">
                <a href="" class="position-absolute w-100 h-100 top-0 start-0"></a>
                <img src="../../public/app/imgs/xitkhoang.webp" alt="" class="">
                <p>Xịt khoáng</p>
            </div>
        </div>
    </div>
    <!-- Popular Products Section -->
    <div class="popular_products mt-5">
        <h4 class="text-uppercase fw-bold text-center">Các Sản phẩm bán chạy</h4>
        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 px-sm-0 px-2 mt-4">
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <a href="#" class="see_all-btn bg-transparent py-2 px-4 fw-bold rounded-5 text-decoration-none d-inline-block border-1">Xem
                tất cả</a>
        </div>
    </div>
    <div class="last_banner mt-5">
        <img src="../../public/app/imgs/banner-son-moi-1-PhotoRoom.png-PhotoRoom.png" alt="" class="w-100 rounded-3">
    </div>
    <!-- Foryou Products Section -->
    <div class="foryou_products mt-5">
        <h4 class="text-uppercase fw-bold text-center">Sản phẩm dành cho bạn</h4>
        <div class="row  row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 px-sm-0 px-2 mt-4">
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 p-1">
                <div class="box-products">
                    <div class="wrap-imgage">
                        <div class="watch-now"><a href="#">Xem ngay</a></div>
                        <img src="../../public/app/imgs/bf7aac2f-02b9-42aa-8106-2f97d758f4a7.webp" alt="">
                        <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4.webp" alt="">
                    </div>
                    <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                    <div class="card-content">
                        <div class="text-brand">CLUB CLIO</div>
                        <div class="text-name">Phấn Nước Che Khuyết Điểm Hoàn Hảo Clio Kill Cover The New
                            Founwear
                            Cushion SPF50+ PA+++ (15gx2) (Tặng 1 lõi refill)</div>
                        <div class="d-flex flex-column flex-lg-row justify-content-center text-center price-section" style="gap: 5px">
                            <div class="price-now">778.050đ</div>
                            <div class="wrap-under d-flex justify-content-center text-center">
                                <div class="price-origin">819.000đ</div>
                                <div class="sale">
                                    <div class="text-sale">-5%</div>
                                </div>
                            </div>
                        </div>
                        <div class="warp-star d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <div class="quantity-feedback">(40)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <a href="#" class="see_all-btn bg-transparent py-2 px-4 fw-bold rounded-5 text-decoration-none d-inline-block border-1">Xem
                tất cả</a>
        </div>
    </div>
    <!-- Best Search Section -->
    <div class="best_search mt-5">
        <h4 class="text-uppercase fw-bold text-center">Tìm kiếm nhiều nhất</h4>
        <div class="keywords mt-4 text-center">
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">son môi</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">trang điểm</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">mặt nạ</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">chăm sóc da</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">dầu gội</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">sữa rửa mặt</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">serum</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">sữa tắm</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">chống nắng</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">kem mắt</a>
            <a href="#" role="button" class="py-2 d-inline-block rounded-5 px-4 mx-2 my-2">xịt khoáng</a>
        </div>
    </div>
</div>