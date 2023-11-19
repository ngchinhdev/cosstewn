<div class="container" id="container_detail">
    <?php if ($infoByProducts) : ?>
        <div class="row">
            <div class="col-12 text-link my-2">
                Trang chủ > Sản phẩm
            </div>
            <div class="col-12 d-flex col-lg-6">
                <div class="list-imagedetail">
                    <?php $images = explode(',', $infoByProducts['hinh_anh']); ?>
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="" <?php if ($i === 0) {
                                                                                                        echo 'class="active"';
                                                                                                    } ?>>
                    <?php } ?>
                </div>
                <div class="wrapper-image d-flex justify-content-center align-items-center">
                    <?php $images = explode(',', $infoByProducts['hinh_anh']); ?>
                    <?php for ($i = 0; $i < 1; $i++) { ?>
                        <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="">
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-sm-3 mt-lg-0">
                <div class="brand_name mb-2"><?php echo $infoByProducts['ten_loai'] ?></div>
                <div class="name_product">
                    <h1><?php echo $infoByProducts['ten_sp'] ?></h1>
                </div>
                <div class="wrap-price d-flex align-items-baseline">
                    <div class="price-now"><?= number_format($infoByProducts['gia_tien'], 0, '.', '.') ?>₫</div>
                    <div class="price-origin"><?= number_format($infoByProducts['gia_goc'], 0, '.', '.') ?>₫</div>
                    <div class="sale">
                        <div class="text-sale">-<?= ceil((($infoByProducts['gia_goc'] - $infoByProducts['gia_tien']) / $infoByProducts['gia_goc'] * 100)) ?>%</div>
                    </div>
                </div>

                <div class="flash-sale-wrapper d-flex my-2">
                    <div class="text-flash-sale"><i class="fa-solid fa-bolt"></i>SIÊU DEAL CHỚP NHOÁNG</div>
                    <div class="timer">
                        <div class="container-segment ms-2 before-icon">
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

                        <div class="container-segment ms-2 before-icon">
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

                <div class="wrapper-action">
                    <div class="d-flex h-50 wrap-quantity-btn">
                        <button type="button" class="quantity-btn minus-btn"><i class="fa-solid fa-minus"></i></button>
                        <div class="quantity-text">1</div>
                        <button type="button" class="quantity-btn add-btn"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <button class="btn-add-cart">
                        <i class="fa-solid fa-cart-plus"></i>
                        <span>Thêm vào giỏ hàng</span>
                    </button>
                    <a href="index.php?page=thanh-toan" class="btn-buy">
                        MUA NGAY
                    </a>
                </div>
                <div class="row box-commit">
                    <div class="wrapper-commit col-12 col-md-6">
                        <svg viewBox="64 64 896 896" focusable="false" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                            <path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 00.6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0046.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3zM664.8 561.6l36.1 210.3L512 672.7 323.1 772l36.1-210.3-152.8-149L417.6 382 512 190.7 606.4 382l211.2 30.7-152.8 148.9z">
                            </path>
                        </svg>
                        <span>Nhận <strong>HSV Point</strong> cho mỗi lần mua</span>
                    </div>
                    <div class="wrapper-commit col-12 col-md-6">
                        <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.1742 6.23137H28V4.58431H23.1742V0H4.77419V4.58431H0V6.23137H4.77419V10.9255C4.77419 11.6118 4.85161 12.298 5.00645 12.9294H0V14.5765H5.57419C6.34839 16.3059 7.66451 17.7608 9.36774 18.6392L14.0129 21L18.6581 18.6392C20.3355 17.7882 21.6516 16.3333 22.4516 14.5765H28V12.9294H22.9419C23.0968 12.2706 23.1742 11.6118 23.1742 10.9255V6.23137ZM21.6258 10.898C21.6258 13.5333 20.1806 15.9765 17.9355 17.1294L13.9613 19.1608L9.9871 17.1294C7.74194 15.9765 6.29677 13.5333 6.29677 10.898V1.64706H21.6V10.898H21.6258Z" fill="black"></path>
                            <path d="M19.3548 6.61569L18.1677 5.5451L13.3935 11.4745L10.6581 8.75686L9.6 9.96471L13.5226 13.8627L19.3548 6.61569Z" fill="black"></path>
                        </svg>
                        <span>Cam kết <strong>hàng chính hãng</strong></span>
                    </div>
                    <div class="wrapper-commit col-12 col-md-6">
                        <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 5.63536L18.3572 1.40884H14.0222V0H0V1.40884H12.5691V12.7735H10.2684C9.95358 11.2003 8.47629 9.97928 6.73259 9.97928C4.9889 9.97928 3.53582 11.2003 3.19677 12.797H0V14.2058H3.19677C3.53582 15.8025 4.9889 17 6.73259 17C8.47629 17 9.92937 15.8025 10.2684 14.2058H14.555C14.894 15.8025 16.3471 17 18.0908 17C19.8345 17 21.3118 15.8025 21.6509 14.2058H24V5.63536ZM6.73259 15.5912C5.54591 15.5912 4.57719 14.6519 4.57719 13.5014C4.57719 12.3508 5.54591 11.4116 6.73259 11.4116C7.91927 11.4116 8.88799 12.3508 8.88799 13.5014C8.88799 14.6519 7.91927 15.5912 6.73259 15.5912ZM18.115 15.5912C16.9284 15.5912 15.9596 14.6519 15.9596 13.5014C15.9596 12.3508 16.9284 11.4116 18.115 11.4116C19.3017 11.4116 20.2704 12.3508 20.2704 13.5014C20.2704 14.6519 19.3017 15.5912 18.115 15.5912ZM22.5469 12.797H21.6509C21.3118 11.2003 19.8587 9.97928 18.115 9.97928C16.3713 9.97928 14.894 11.2003 14.555 12.797H14.0222V2.81768H17.8486L22.5469 6.33978V12.797Z" fill="#060404"></path>
                            <path d="M3.0999 4.34392H0V5.75276H3.0999V4.34392Z" fill="#060404"></path>
                            <path d="M3.0999 8.45304H0V9.86188H3.0999V8.45304Z" fill="#060404"></path>
                        </svg>
                        <span><strong>Miễn phí giao hàng</strong>, tối đa 44k</span>
                    </div>
                    <div class="wrapper-commit col-12 col-md-6">
                        <svg width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.529 6.00281L27.4911 7.26508L29.5935 9.14446H24.404V18.317H8.59597V14.7546H6.99919V20H26.0008V10.8275H29.5935L27.4911 12.7349L28.529 13.9972L33 9.98597L28.529 6.00281Z" fill="black"></path>
                            <path d="M8.59597 10.8275V1.68303H12.8008V7.79804H20.1992V1.68303H24.404V5.4979H26.0008V0H6.99919V9.14446H3.40645L5.50887 7.26508L4.47096 5.97475L0 9.98597L4.47096 13.9972L5.50887 12.7069L3.40645 10.8275H8.59597ZM18.6024 1.68303V6.11501H14.3976V1.68303H18.6024Z" fill="black"></path>
                        </svg>
                        <span>Đổi/trả hàng trong <strong>7 ngày</strong></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row wrap-description ">
        <div class="col-12 col-lg-3 p-0">
            <h2>Mô tả</h2>
        </div>
        <div class="col-12 col-lg-9 d-flex p-0">
            <div class="text-description"><?php echo $infoByProducts['mo_ta'] ?></div>
        </div>
    </div>
    <div class="box-banner-detail">
        <img src="../../public/app/imgs/banner-detail.webp" alt="" class="rounded-3">
        <img src="../../public/app/imgs/banner2-detail.webp" alt="" class="rounded-3">
        <img src="../../public/app/imgs/banner3-detail.webp" alt="" class="rounded-3">
    </div>
    <div class="row wrapper-similarProducts mt-4 d-flex justify-content-center" id="container_catalog">
        <h3 class="col-12 my-3">SẢN PHẨM TƯƠNG TỰ</h3>
        <div class="row row-cols-lg-5 row-cols-sm-2 row-cols-md-3 ">
            <?php foreach ($similarProducts as $row) : ?>
                <div class="mb-1 p-1">
                    <div class="box-products">
                        <div class="wrap-imgage">
                            <div class="watch-now"><a href="index.php?page=san-pham&masp=<?php echo $row['masp'] ?>&maloai=<?php echo $row['maloai'] ?>">Xem ngay</a></div>
                            <?php $images = explode(',', $row['hinh_anh']); ?>
                            <?php for ($i = 0; $i < 2; $i++) { ?>
                                <img src="../../public/app/imgs/imgs-product/<?php echo $images[$i] ?>" alt="">
                            <?php } ?>
                        </div>
                        <div class="wrap-gift"><i class="fa-solid fa-gift"></i></div>
                        <div class="card-content">
                            <div class="text-brand"><?php echo $row['ten_loai'] ?></div>
                            <div class="text-name"><?php echo $row['ten_sp'] ?></div>
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
                                <div class="quantity-feedback"><?php echo $row['so_luot_xem'] ?> Lượt xem )</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="box-comment row justify-content-center align-items-center mt-3">
        <div class="wrapper-title col-12 d-flex">
            <div class="quantity-comment">
                32 Bình luận
            </div>
            <div onclick="toggleItemsArrange()" class="menu-arrange d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" focusable="false" style="pointer-events: none; display: block; ">
                    <path d="M21 6H3V5h18v1zm-6 5H3v1h12v-1zm-6 6H3v1h6v-1z"></path>
                </svg>
                Sắp xếp theo
                <div class="wrapper-arrange">
                    <div class="items-arrange d-flex flex-column">
                        <a href="#">Bình luận mới nhất</a>
                        <a href="#">Bình luận cũ nhất</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-action col-12 d-flex">
            <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4 copy.webp" alt="">
            <form action="">
                <input type="text" placeholder="Thêm nhận xét..." class="input-cmt">
                <button type="submit" class="btn-sendcmt">Gửi bình luận</button>
            </form>

        </div>
        <div class="wrapper-cmt col-12 mt-4">
            <div class="infor-cmt d-flex justify-content-start align-items-center">
                <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4 copy.webp" alt="" class="align-self-start">
                <div class="box-infor">
                    <div class="infor-top d-flex align-items-center">
                        <div class="infor-name">
                            Võ Thanh Phương
                        </div>
                        <div class="infor-date">
                            2023-10-01
                        </div>
                        <div class="check-buy">
                            <i class="fa-solid fa-check"></i>Đã mua hàng
                        </div>
                    </div>
                    <div class="text-cmt">
                        Sản phẩm quá tốt, xứng đáng với giá tiền mình bỏ ra
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-cmt col-12 mt-4">
            <div class="infor-cmt d-flex justify-content-start align-items-center">
                <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4 copy.webp" alt="" class="align-self-start">
                <div class="box-infor">
                    <div class="infor-top d-flex align-items-center">
                        <div class="infor-name">
                            Võ Thanh Phương
                        </div>
                        <div class="infor-date">
                            2023-10-01
                        </div>
                        <div class="check-buy">
                            <i class="fa-solid fa-check"></i>Đã mua hàng
                        </div>
                    </div>
                    <div class="text-cmt">
                        Sản phẩm quá tốt, xứng đáng với giá tiền mình bỏ ra
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-cmt col-12 mt-4">
            <div class="infor-cmt d-flex justify-content-start align-items-center">
                <img src="../../public/app/imgs/85436612-bcf2-47cb-8b63-4dc60c0b98a4 copy.webp" alt="" class="align-self-start">
                <div class="box-infor">
                    <div class="infor-top d-flex align-items-center">
                        <div class="infor-name">
                            Võ Thanh Phương
                        </div>
                        <div class="infor-date">
                            2023-10-01
                        </div>
                        <div class="check-buy">
                            <i class="fa-solid fa-check"></i>Đã mua hàng
                        </div>
                    </div>
                    <div class="text-cmt">
                        Sản phẩm quá tốt, xứng đáng với giá tiền mình bỏ ra
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>