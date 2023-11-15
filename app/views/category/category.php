<div id="container_catalog" class="container mt-2">
    <div class="row">
        <div class="col-12 text-link">
            Trang chủ > Trang điểm
            <h1>TRANG ĐIỂM</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 set_filter d-none d-xl-block">
            BỘ LỌC
        </div>
        <div class="col-12 col-xl-6 d-flex align-items-center tools-filter justify-content-end p-0">
            <div class="result-search d-md-none">857 Kết quả</div>
            <div class="result-search d-none d-md-block">857 Kết quả</div>
            <div class="filterBy">Lọc theo</div>
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tất cả
                            </a>
                            <div class="dropdown-menu dropdown-menu-end filter-items" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Giá giảm dần&ensp;<i class="fa-solid fa-arrow-down-wide-short"></i></a>
                                <a class="dropdown-item" href="#">Giá tăng dần&ensp;<i class="fa-solid fa-arrow-down-short-wide"></i></a>
                                <a class="dropdown-item" href="#">Xem nhiều&ensp;<i class="fa-solid fa-eye"></i></a>
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
                            <input type="checkbox" id="price-checkbox" class="custom-checkbox">
                            <label for="price-checkbox">
                                <p>Dưới 500.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox2" class="custom-checkbox">
                            <label for="price-checkbox2">
                                <p>500.000₫ - 1.000.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox3" class="custom-checkbox">
                            <label for="price-checkbox3">
                                <p>1.000.000₫ - 1.500.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox4" class="custom-checkbox">
                            <label for="price-checkbox4">
                                <p>1.500.000₫ - 2.000.000₫</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox5" class="custom-checkbox">
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
                            <input type="checkbox" id="price-checkbox6" class="custom-checkbox2">
                            <label for="price-checkbox6">
                                <p>Từ 10% - 20%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox7" class="custom-checkbox2">
                            <label for="price-checkbox7">
                                <p>Từ 20% - 30%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox8" class="custom-checkbox2">
                            <label for="price-checkbox8">
                                <p>Từ 30% - 40%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox9" class="custom-checkbox2">
                            <label for="price-checkbox9">
                                <p>Từ 40% - 50%</p><i class="fa-solid fa-check"></i>
                            </label>
                        </div>
                        <div class="wrap-checkbox">
                            <input type="checkbox" id="price-checkbox10" class="custom-checkbox2">
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
            <div class="row" id="container-response" data-total-page="<?php echo $totalPages = ceil($countProducts / 12); ?>" data-brand-id="<?php echo isset($_GET['maloai']) ? $_GET['maloai'] : null; ?>" data-new-products="<?php echo isset($_GET['type']) ? $_GET['type'] : null; ?>">
                <div class="row">
                    <!-- <?php foreach ($productByPage as $row) : ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-1 p-1">
                            <div class="box-products">
                                <div class="wrap-imgage">
                                    <div class="watch-now">
                                        <a href="index.php?page=san-pham&masp=<?= $row['masp'] ?>&maloai=<?= $row['maloai'] ?>">Xem ngay</a>
                                    </div>
                                    <?php
                                    $images = explode(',', $row['hinh_anh']);
                                    for ($i = 0; $i < 2; $i++) : ?>
                                        <img src="../../public/app/imgs/img-prods/<?= $images[$i] ?>" alt="">
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
                                        <div class="quantity-feedback"><?= $row['so_luot_xem'] ?> Lượt xem)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?> -->
                </div>

                <!-- <div class="pagination-container d-flex justify-content-center my-4">
                    <ul class="pagination">
                        <?= ($pageNumber > 1) ? '<li><a href="#" class="node-paging prev-page" data-page-prev="' . ($pageNumber - 1) . '"><i class="fa-solid fa-chevron-left"></i></a></li>' : '' ?>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <?php $isActive = ($i == $pageNumber) ? ' active' : ''; ?>
                            <?= ($totalPages > 1) ? '<li><a href="#" class="node-paging node-number' . $isActive . '" data-page-num="' . $i . '">' . $i . '</a></li>' : '' ?>
                        <?php endfor; ?>
                        <?= ($pageNumber < $totalPages) ? '<li><a href="#" class="node-paging next-page" data-page-next="' . ($pageNumber + 1) . '"><i class="fa-solid fa-chevron-right"></i></a></li>' : '' ?>
                    </ul>
                </div> -->
            </div>
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