<div id="container_profile" class="container mt-4">
    <div class="row">
        <div class="left_site px-4 py-3 col-lg-3">
            <div class="info_box d-flex align-items-center">
                <div class="avt">
                    <img src="<?= isset($_SESSION['avatar']) && $_SESSION['avatar'] ? $_SESSION['avatar'] : 'https://inkythuatso.com/uploads/thumbnails/800/2023/03/9-anh-dai-dien-trang-inkythuatso-03-15-27-03.jpg' ?>" alt="Avatar" class="rounded-circle me-3">
                </div>
                <div class="name">
                    <h6 class="mb-1"><?= $_SESSION['name'] ?></h6>
                    <a href="index.php?page=ho-so&u=<?= base64_encode($_SESSION['user_id']) ?>" class="change_profile d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <g clip-path="url(#clip0_741_1547)">
                                <path d="M1.75838 9.66666L0.966711 13.0833C0.939401 13.2082 0.940337 13.3376 0.969451 13.4621C0.998565 13.5866 1.05512 13.703 1.13499 13.8029C1.21485 13.9027 1.31601 13.9834 1.43108 14.0392C1.54614 14.0949 1.6722 14.1242 1.80004 14.125C1.85961 14.131 1.91964 14.131 1.97921 14.125L5.41671 13.3333L12.0167 6.75833L8.33338 3.08333L1.75838 9.66666Z" fill="black" fill-opacity="0.6" />
                                <path d="M14.0917 3.46666L11.6334 1.00833C11.4718 0.84752 11.253 0.757248 11.025 0.757248C10.7971 0.757248 10.5783 0.84752 10.4167 1.00833L9.05005 2.37499L12.7292 6.05416L14.0959 4.68749C14.1759 4.60711 14.2392 4.51174 14.2823 4.40685C14.3254 4.30196 14.3473 4.1896 14.347 4.07621C14.3466 3.96282 14.3238 3.85061 14.28 3.74602C14.2362 3.64143 14.1722 3.54649 14.0917 3.46666Z" fill="black" fill-opacity="0.6" />
                            </g>
                            <defs>
                                <clipPath id="clip0_741_1547">
                                    <rect width="15" height="15" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="ms-2">Sửa Hồ Sơ</span>
                    </a>
                </div>
            </div>
            <ul class="nav mt-3 w-100">
                <li class="w-100">
                    <a href="index.php?page=ho-so&u=<?= base64_encode($_SESSION['user_id']) ?>" class="w-100 d-inline-block p-2 rounded-2 <?php echo isset($_GET['page']) && $_GET['page'] === 'ho-so' ? 'active' : ''; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M15 12.5C17.7614 12.5 20 10.2614 20 7.5C20 4.73858 17.7614 2.5 15 2.5C12.2386 2.5 10 4.73858 10 7.5C10 10.2614 12.2386 12.5 15 12.5Z" stroke="black" stroke-width="1.5" />
                            <path d="M25 21.875C25 24.9812 25 27.5 15 27.5C5 27.5 5 24.9812 5 21.875C5 18.7688 9.4775 16.25 15 16.25C20.5225 16.25 25 18.7688 25 21.875Z" stroke="black" stroke-width="1.5" />
                        </svg>
                        <span class="ms-2">Tài khoản của tôi</span>
                    </a>
                </li>
                <li class="mt-2 w-100">
                    <a href="index.php?page=lich-su-mua&u=<?= base64_encode($_SESSION['user_id']) ?>&status=all" class="w-100 d-inline-block p-2 <?php echo isset($_GET['page']) && $_GET['page'] === 'lich-su-mua' ? 'active' : ''; ?> rounded-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M20.9437 2.5H9.05625C7.6075 2.5 6.88375 2.5 6.29875 2.70375C5.74722 2.89932 5.2482 3.21938 4.84042 3.63908C4.43265 4.05878 4.1271 4.56682 3.9475 5.12375C3.75 5.72625 3.75 6.47125 3.75 7.9625V25.4675C3.75 26.54 4.98125 27.11 5.76 26.3975C5.97848 26.1956 6.26503 26.0835 6.5625 26.0835C6.85997 26.0835 7.14652 26.1956 7.365 26.3975L7.96875 26.95C8.35151 27.3039 8.85367 27.5005 9.375 27.5005C9.89633 27.5005 10.3985 27.3039 10.7812 26.95C11.164 26.596 11.6662 26.3995 12.1875 26.3995C12.7088 26.3995 13.211 26.596 13.5938 26.95C13.9765 27.3039 14.4787 27.5005 15 27.5005C15.5213 27.5005 16.0235 27.3039 16.4062 26.95C16.789 26.596 17.2912 26.3995 17.8125 26.3995C18.3338 26.3995 18.836 26.596 19.2188 26.95C19.6015 27.3039 20.1037 27.5005 20.625 27.5005C21.1463 27.5005 21.6485 27.3039 22.0312 26.95L22.635 26.3975C22.8535 26.1956 23.14 26.0835 23.4375 26.0835C23.735 26.0835 24.0215 26.1956 24.24 26.3975C25.0188 27.11 26.25 26.54 26.25 25.4675V7.9625C26.25 6.47125 26.25 5.725 26.0525 5.125C25.8732 4.56779 25.5677 4.05946 25.1599 3.63952C24.7521 3.21958 24.253 2.89936 23.7013 2.70375C23.1163 2.5 22.3925 2.5 20.9437 2.5Z" stroke="#000000" stroke-width="1.5" />
                            <path d="M13.125 13.75H21.25M8.75 13.75H9.375M8.75 9.375H9.375M8.75 18.125H9.375M13.125 9.375H21.25M13.125 18.125H21.25" stroke="#000000" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span class="ms-2">Đơn mua</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="right_site col-lg-9">
            <ul class="menu_status d-flex ps-0">
                <li>
                    <a class="pt-3 pb-3 px-4 me-2 d-inline-block position-relative <?php echo isset($_GET['status']) && $_GET['status'] === 'all' ? 'active' : ''; ?>" 
                        href="index.php?page=lich-su-mua&u=<?= base64_encode($_SESSION['user_id']) ?>&status=all">Tất cả đơn hàng</a>
                </li>
                <li>
                    <a class="pt-3 pb-3 px-4 me-2 d-inline-block position-relative <?php echo isset($_GET['status']) && $_GET['status'] === 'pending' ? 'active' : ''; ?>" 
                        href="index.php?page=lich-su-mua&u=<?= base64_encode($_SESSION['user_id']) ?>&status=pending">Đang giao</a>
                </li>
                <li>
                    <a class="pt-3 pb-3 px-4 me-2 d-inline-block position-relative <?php echo isset($_GET['status']) && $_GET['status'] === 'complete' ? 'active' : ''; ?>" 
                        href="index.php?page=lich-su-mua&u=<?= base64_encode($_SESSION['user_id']) ?>&status=complete">Đã hoàn thành</a>
                </li>
            </ul>
            <?php if(count($all_orders) === 0) echo '<div class="px-3">Chưa có sản phẩm nào.</div>' ?>
            <?php foreach($all_orders as $key => $order): ?>
            <div class="bill_details py-3 px-4 mt-3">
                <div class="title d-flex align-items-center justify-content-between pb-2 border-bottom">
                    <div class="date text-danger">
                        Đơn hàng <span>(<?= date('d/m/Y', strtotime($order['ngay_dat_hang'])) ?>)</span>
                    </div>
                    <div class="status d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M24.1621 11.4258L22.7949 8.00781C22.6789 7.71862 22.4788 7.47093 22.2204 7.29681C21.962 7.12269 21.6573 7.03018 21.3457 7.03125H17.9688V6.25C17.9688 6.0428 17.8864 5.84409 17.7399 5.69757C17.5934 5.55106 17.3947 5.46875 17.1875 5.46875H2.34375C1.92935 5.46875 1.53192 5.63337 1.2389 5.9264C0.94587 6.21942 0.78125 6.61685 0.78125 7.03125V17.9687C0.78125 18.3831 0.94587 18.7806 1.2389 19.0736C1.53192 19.3666 1.92935 19.5312 2.34375 19.5312H4.00391C4.17602 20.2034 4.56695 20.7992 5.11509 21.2247C5.66322 21.6502 6.33737 21.8811 7.03125 21.8811C7.72513 21.8811 8.39928 21.6502 8.94741 21.2247C9.49555 20.7992 9.88648 20.2034 10.0586 19.5312H14.9414C15.1135 20.2034 15.5045 20.7992 16.0526 21.2247C16.6007 21.6502 17.2749 21.8811 17.9688 21.8811C18.6626 21.8811 19.3368 21.6502 19.8849 21.2247C20.433 20.7992 20.824 20.2034 20.9961 19.5312H22.6562C23.0707 19.5312 23.4681 19.3666 23.7611 19.0736C24.0541 18.7806 24.2188 18.3831 24.2188 17.9687V11.7187C24.219 11.6183 24.1998 11.5188 24.1621 11.4258ZM17.9688 8.59375H21.3457L22.2832 10.9375H17.9688V8.59375ZM2.34375 7.03125H16.4062V13.2812H2.34375V7.03125ZM7.03125 20.3125C6.72222 20.3125 6.42012 20.2209 6.16317 20.0492C5.90622 19.8775 5.70595 19.6335 5.58769 19.3479C5.46943 19.0624 5.43848 18.7483 5.49877 18.4452C5.55906 18.1421 5.70788 17.8637 5.9264 17.6451C6.14492 17.4266 6.42333 17.2778 6.72642 17.2175C7.02952 17.1572 7.34368 17.1882 7.62919 17.3064C7.9147 17.4247 8.15873 17.625 8.33042 17.8819C8.50211 18.1389 8.59375 18.441 8.59375 18.75C8.59375 19.1644 8.42913 19.5618 8.1361 19.8549C7.84308 20.1479 7.44565 20.3125 7.03125 20.3125ZM14.9414 17.9687H10.0586C9.88648 17.2965 9.49555 16.7008 8.94741 16.2753C8.39928 15.8498 7.72513 15.6189 7.03125 15.6189C6.33737 15.6189 5.66322 15.8498 5.11509 16.2753C4.56695 16.7008 4.17602 17.2965 4.00391 17.9687H2.34375V14.8437H16.4062V16.0459C16.047 16.2535 15.7325 16.5304 15.4811 16.8605C15.2296 17.1906 15.0462 17.5673 14.9414 17.9687ZM17.9688 20.3125C17.6597 20.3125 17.3576 20.2209 17.1007 20.0492C16.8437 19.8775 16.6435 19.6335 16.5252 19.3479C16.4069 19.0624 16.376 18.7483 16.4363 18.4452C16.4966 18.1421 16.6454 17.8637 16.8639 17.6451C17.0824 17.4266 17.3608 17.2778 17.6639 17.2175C17.967 17.1572 18.2812 17.1882 18.5667 17.3064C18.8522 17.4247 19.0962 17.625 19.2679 17.8819C19.4396 18.1389 19.5312 18.441 19.5312 18.75C19.5312 19.1644 19.3666 19.5618 19.0736 19.8549C18.7806 20.1479 18.3832 20.3125 17.9688 20.3125ZM22.6562 17.9687H20.9961C20.8219 17.2982 20.4302 16.7043 19.8824 16.2802C19.3346 15.8561 18.6616 15.6257 17.9688 15.625V12.5H22.6562V17.9687Z" fill="#26AA99" />
                        </svg>
                        <span class="ms-2"><?php echo $order['trang_thai'] === 0 ? "Đơn hàng đang được giao."
                                                    : "Đơn hàng đã được giao thành công." ?></span>
                    </div>
                </div>
                <div class="items_row">
                    <?php foreach($order_details[$key] as $detail): ?>
                        <div class="item d-flex justify-content-between align-items-center mt-3 pb-3 border-bottom">
                            <div class="item_info d-flex align-items-center">
                                <img src="../../public/app/imgs/imgs-product/<?= $detail['hinh_anh'] ?>" alt="" class="me-3 img_prod">
                                <div class="name">
                                    <b><?= $detail['ten_loai'] ?></b>
                                    <p style="font-size: 13px;" class="mb-2"><?= $detail['ten_sp'] ?></p>
                                    <span>x<?= $detail['so_luong'] ?></span>
                                </div>
                            </div>
                            <div class="item_price">
                                <del class="pe-2"><?= number_format($detail['gia_goc'], 0, '.', '.') ?>₫</del>
                                <strong><?= number_format($detail['gia_tien'], 0, '.', '.') ?>₫</strong>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="bill_sumary d-flex justify-content-end align-items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M3 20C2.45 20 1.979 19.804 1.587 19.412C1.195 19.02 0.999335 18.5493 1 18V7H3V18H20V20H3ZM7 16C6.45 16 5.979 15.804 5.587 15.412C5.195 15.02 4.99934 14.5493 5 14V6C5 5.45 5.196 4.979 5.588 4.587C5.98 4.195 6.45067 3.99934 7 4H21C21.55 4 22.021 4.196 22.413 4.588C22.805 4.98 23.0007 5.45067 23 6V14C23 14.55 22.804 15.021 22.412 15.413C22.02 15.805 21.5493 16.0007 21 16H7ZM9 14C9 13.45 8.804 12.979 8.412 12.587C8.02 12.195 7.54934 11.9993 7 12V14H9ZM19 14H21V12C20.45 12 19.979 12.196 19.587 12.588C19.195 12.98 18.9993 13.4507 19 14ZM14 13C14.8333 13 15.5417 12.7083 16.125 12.125C16.7083 11.5417 17 10.8333 17 10C17 9.16667 16.7083 8.45834 16.125 7.875C15.5417 7.29167 14.8333 7 14 7C13.1667 7 12.4583 7.29167 11.875 7.875C11.2917 8.45834 11 9.16667 11 10C11 10.8333 11.2917 11.5417 11.875 12.125C12.4583 12.7083 13.1667 13 14 13ZM7 8C7.55 8 8.021 7.804 8.413 7.412C8.805 7.02 9.00067 6.54934 9 6H7V8ZM21 8V6H19C19 6.55 19.196 7.021 19.588 7.413C19.98 7.805 20.4507 8.00067 21 8Z" fill="#C12929" />
                    </svg>
                    <span class="ms-2 me-2">Thành tiền: </span><strong class="text-danger">555.555 đ</strong>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>