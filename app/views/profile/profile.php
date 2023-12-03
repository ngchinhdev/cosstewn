<div id="container_profile" class="container mt-4">
    <div class="row">
        <div class="left_site px-4 py-3 col-lg-3">
            <div class="info_box d-flex align-items-center">
                <div class="avt">
                    <?php 
                        $is_regular_user = !(isset($_SESSION['avatar']) && $_SESSION['avatar'] && str_contains($_SESSION['avatar'], 'http'));
                        $link = !$is_regular_user ? $_SESSION['avatar'] : '../../public/app/imgs/'.$_SESSION['avatar'] 
                    ?>
                    <img src="<?= isset($_SESSION['avatar']) && $_SESSION['avatar'] ? $link : '../../public/app/imgs/anhdaidien.jpg' ?>" alt="Avatar" class="rounded-circle me-3">
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
            <div class="prof_info px-4 py-3">
                <div class="heading border-bottom d-flex justify-content-between">
                    <div class="">
                        <h5 class="mb-1">Hồ sơ của tôi</h5>
                        <p class="mb-2">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                    </div>
                    <div class="error_el text-danger">
                        
                    </div>
                </div>
                <form class="row mt-4 form_info" enctype="multipart/form-data" action="../controllers/profileController/profileController.php?u=<?= $_SESSION['user_id'] ?>" method="post">
                    <div class="col-lg-8 px-lg-4 px-sm-1 border-end">
                        <?= isset($_SESSION['error']) ? $_SESSION['error'] : '' ?>
                        <table class="px-4 w-100">
                            <tr class="align-items-center">
                                <td class="text-end me-3 pe-5">Họ tên: </td>
                                <td>
                                    <input class="w-100 border-bottom" <?php echo !$is_regular_user ? 'readonly' : '' ?> value="<?= $cur_user['ho_ten'] ?>" type="text" name="name" id="">
                                </td>
                            </tr>
                            <tr class="align-items-center">
                                <td class="text-end me-3 pe-5">Email: </td>
                                <td>
                                    <input class="w-100 border-bottom" <?php echo !$is_regular_user ? 'readonly' : '' ?> value="<?= $cur_user['email'] ?>" type="text" name="email" id="">
                                </td>
                            </tr>
                            <tr class="align-items-center">
                                <td class="text-end me-3 pe-5">Số điện thoại: </td>
                                <td>
                                    <input class="w-100 border-bottom" value="<?= $cur_user['so_dien_thoai'] ?>" type="text" name="phone" id="">
                                </td>
                            </tr>
                            <tr class="align-items-center">
                                <td class="text-end me-3 pe-5">Địa chỉ: </td>
                                <td>
                                    <input class="w-100 border-bottom" value="<?= $cur_user['dia_chi'] ?>" type="text" name="address" id="">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="save" value="Lưu" id="save" class="py-2 px-3 mt-3 rounded-2">
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center justify-content-between pt-3">
                        <div class="choose_img d-flex flex-column align-items-center">
                            <img src="<?= isset($_SESSION['avatar']) && $_SESSION['avatar'] ? $link : 'https://inkythuatso.com/uploads/thumbnails/800/2023/03/9-anh-dai-dien-trang-inkythuatso-03-15-27-03.jpg' ?>" alt="Avatar" class="rounded-circle">
                            <input type="file" class="d-none" id="file-avt" name="avatar">
                            <label for="file-avt" role="button" class="d-inline-block mt-4 border py-2 px-3 rounded-2 <?= $is_regular_user ? '' : 'd-none' ?>">Chọn ảnh</label>
                        </div>
                        <div class="logout">
                            <input type="submit" name="logout" id="logout" value="Đăng xuất" class="py-2 px-3 mt-3 rounded-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>