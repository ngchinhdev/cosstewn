<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../public/app/css/header.css">
    <link rel="stylesheet" href="../../public/app/css/footer.css">
    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'danh-muc':
                echo '<link rel="stylesheet" href="../../public/app/css/category.css">';
                break;
            case 'san-pham':
                echo '<link rel="stylesheet" href="../../public/app/css/detail.css">';
                break;
            case 'dang-nhap':
            case 'dang-ky':
                echo '<link rel="stylesheet" href="../../public/app/css/login.css">';
                break;
            case 'gio-hang':
                echo '<link rel="stylesheet" href="../../public/app/css/cart.css">';
                break;
            case 'lien-he':
                echo '<link rel="stylesheet" href="../../public/app/css/contact.css">';
                break;
            case 'thanh-toan':
                echo '<link rel="stylesheet" href="../../public/app/css/checkout.css">';
                break;
            case 'lich-su-mua':
            case 'ho-so':
                echo '<link rel="stylesheet" href="../../public/app/css/profile.css">';
                break;
            default:
                echo '<link rel="stylesheet" href="../../public/app/css/main.css">';
        }
    } else {
        echo '<link rel="stylesheet" href="../../public/app/css/main.css">';
    }
    ?>

    <!-- Titile -->
    <title>Let's go to code!!</title>
</head>

<body id="body">
    <header id="header" class="position-sticky top-0">
        <div id="topbar" class="">
            <p class="text-center text-light">Bạn chưa có tài khoản? <span class="ms-3 me-3"> • </span>
                Nhanh tay đăng ký thành viên <span class="ms-3 me-3"> • </span> Đăng nhập ngay để
                nhận thêm
                nhiều ưu đãi từ Costewn</p>
        </div>
        <div id="main_header" class="pt-3">
            <div class="container">
                <div class="above_header d-flex justify-content-between align-items-center">
                    <div class="logo_header">
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><img class="w-100 h-100" src="../../public/app/imgs/logoft.png" alt="Logo"></a>
                    </div>
                    <div class="right_above d-flex align-items-center position-relative">
                        <form id="searchForm" method="GET" class="search_header position-relative d-none d-sm-flex">
                            <input name="search" type="text" placeholder="Sữa rửa mặt" class="pt-2 pb-2 pe-3 ps-3 w-100">
                            <i class="fa-solid fa-magnifying-glass position-absolute fs-5"></i>
                        </form>
                        <div class="search_icon_mobile d-sm-none">
                            <i class="fa-solid fa-magnifying-glass d-inline-block"></i>
                        </div>
                        <form class="search_header_hide position-absolute d-sm-flex">
                            <input type="text" placeholder="Sữa rửa mặt" class="pt-2 pb-2 pe-3 ps-3 w-100">
                            <i class="fa-solid fa-magnifying-glass position-absolute fs-5"></i>
                        </form>
                        <span class="ms-md-5 ms-3 me-3 me-md-4 fs-5 text-primary">|</span>
                        <div class="login_header log_cart <?php echo isset($_GET['page']) && ($_GET['page'] === 'dang-nhap' || $_GET['page'] === 'ho-so') ? 'active' : ''; ?>">
                            <a href="index.php?page=<?php echo isset($_COOKIE['user_id']) ? 'ho-so&u='.$_COOKIE['user_id'] : 'dang-nhap' ?>" class="">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 3.5C13.5277 3.5 11.111 4.23311 9.05538 5.60663C6.99976 6.98015 5.39761 8.93238 4.45151 11.2165C3.50542 13.5005 3.25787 16.0139 3.74019 18.4386C4.22251 20.8634 5.41301 23.0907 7.16117 24.8388C8.90933 26.587 11.1366 27.7775 13.5614 28.2598C15.9861 28.7421 18.4995 28.4946 20.7836 27.5485C23.0676 26.6024 25.0199 25.0002 26.3934 22.9446C27.7669 20.889 28.5 18.4723 28.5 16C28.4964 12.6859 27.1782 9.5086 24.8348 7.16519C22.4914 4.82177 19.3141 3.50364 16 3.5ZM8.60876 24.8025C9.35064 23.4962 10.4255 22.4098 11.7239 21.654C13.0222 20.8982 14.4977 20.5001 16 20.5001C17.5023 20.5001 18.9778 20.8982 20.2762 21.654C21.5745 22.4098 22.6494 23.4962 23.3913 24.8025C21.3224 26.5446 18.7047 27.5 16 27.5C13.2954 27.5 10.6776 26.5446 8.60876 24.8025ZM24.1463 24.1088C22.9041 22.0321 20.9128 20.5109 18.5825 19.8588C19.666 19.2826 20.5256 18.3606 21.0246 17.2395C21.5237 16.1184 21.6335 14.8626 21.3366 13.672C21.0397 12.4813 20.3531 11.4241 19.3861 10.6686C18.419 9.91314 17.2271 9.50275 16 9.50275C14.7729 9.50275 13.581 9.91314 12.614 10.6686C11.6469 11.4241 10.9604 12.4813 10.6634 13.672C10.3665 14.8626 10.4763 16.1184 10.9754 17.2395C11.4744 18.3606 12.3341 19.2826 13.4175 19.8588C11.0872 20.5109 9.09589 22.0321 7.85376 24.1088C6.24957 22.4988 5.15838 20.4496 4.71798 18.22C4.27758 15.9903 4.50771 13.6802 5.37933 11.5812C6.25094 9.48226 7.72495 7.68864 9.61522 6.42682C11.5055 5.165 13.7273 4.49157 16 4.49157C18.2727 4.49157 20.4945 5.165 22.3848 6.42682C24.2751 7.68864 25.7491 9.48226 26.6207 11.5812C27.4923 13.6802 27.7224 15.9903 27.282 18.22C26.8416 20.4496 25.7504 22.4988 24.1463 24.1088ZM16 19.5C15.11 19.5 14.24 19.2361 13.4999 18.7416C12.7599 18.2471 12.1831 17.5443 11.8425 16.7221C11.502 15.8998 11.4128 14.995 11.5865 14.1221C11.7601 13.2492 12.1887 12.4474 12.818 11.818C13.4474 11.1887 14.2492 10.7601 15.1221 10.5865C15.995 10.4128 16.8998 10.5019 17.7221 10.8425C18.5443 11.1831 19.2472 11.7599 19.7416 12.4999C20.2361 13.24 20.5 14.11 20.5 15C20.5 16.1935 20.0259 17.3381 19.182 18.182C18.3381 19.0259 17.1935 19.5 16 19.5Z" fill="<?php echo isset($_GET['page']) && ($_GET['page'] === 'dang-nhap' || $_GET['page'] === 'ho-so') ? '#218CFF' : 'black'; ?>" />
                                </svg>
                                <span class="d-none d-xl-inline-block"><?php echo isset($_COOKIE['user_id']) ? 'Hồ sơ' : 'Đăng nhập' ?></span>
                            </a>
                        </div>
                        <div class="cart_header ms-2 ms-xl-4 justify-self-end position-relative log_cart <?php echo isset($_GET['page']) && $_GET['page'] === 'gio-hang' ? 'active' : ''; ?>">
                            <a href="index.php?page=gio-hang">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M10.2085 15.1667C10.2085 14.9346 10.1163 14.712 9.95221 14.5479C9.78812 14.3839 9.56556 14.2917 9.3335 14.2917C9.10143 14.2917 8.87887 14.3839 8.71478 14.5479C8.55068 14.712 8.4585 14.9346 8.4585 15.1667V19.8333C8.4585 20.0654 8.55068 20.288 8.71478 20.4521C8.87887 20.6161 9.10143 20.7083 9.3335 20.7083C9.56556 20.7083 9.78812 20.6161 9.95221 20.4521C10.1163 20.288 10.2085 20.0654 10.2085 19.8333V15.1667ZM18.6668 14.2917C18.8989 14.2917 19.1215 14.3839 19.2855 14.5479C19.4496 14.712 19.5418 14.9346 19.5418 15.1667V19.8333C19.5418 20.0654 19.4496 20.288 19.2855 20.4521C19.1215 20.6161 18.8989 20.7083 18.6668 20.7083C18.4348 20.7083 18.2122 20.6161 18.0481 20.4521C17.884 20.288 17.7918 20.0654 17.7918 19.8333V15.1667C17.7918 14.9346 17.884 14.712 18.0481 14.5479C18.2122 14.3839 18.4348 14.2917 18.6668 14.2917ZM14.8752 15.1667C14.8752 14.9346 14.783 14.712 14.6189 14.5479C14.4548 14.3839 14.2322 14.2917 14.0002 14.2917C13.7681 14.2917 13.5455 14.3839 13.3814 14.5479C13.2173 14.712 13.1252 14.9346 13.1252 15.1667V19.8333C13.1252 20.0654 13.2173 20.288 13.3814 20.4521C13.5455 20.6161 13.7681 20.7083 14.0002 20.7083C14.2322 20.7083 14.4548 20.6161 14.6189 20.4521C14.783 20.288 14.8752 20.0654 14.8752 19.8333V15.1667Z" fill="<?php echo isset($_GET['page']) && $_GET['page'] === 'gio-hang' ? '#218CFF' : 'black'; ?>" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1531 4.05183C19.5977 3.83483 18.9759 3.79867 18.1791 3.79283C18.0136 3.44338 17.7523 3.14811 17.4255 2.94137C17.0988 2.73463 16.7201 2.62491 16.3334 2.625H11.6667C11.2802 2.62481 10.9016 2.73435 10.5748 2.94088C10.2481 3.1474 9.98672 3.44244 9.82106 3.79167C9.02306 3.79867 8.4024 3.83483 7.84706 4.05183C7.18413 4.31115 6.60759 4.75185 6.1834 5.3235C5.75523 5.89867 5.5534 6.63833 5.27806 7.6545L4.5454 10.3413C4.086 10.5722 3.68355 10.9021 3.36706 11.3073C2.6414 12.2372 2.51306 13.3443 2.64256 14.6137C2.7674 15.8457 3.1559 17.3973 3.64123 19.3387L3.67156 19.4635C3.97956 20.6908 4.22806 21.6883 4.5244 22.4665C4.83356 23.2785 5.22673 23.9435 5.87306 24.4487C6.52056 24.9538 7.2614 25.172 8.12356 25.277C8.94956 25.375 9.97856 25.375 11.2444 25.375H16.7557C18.0216 25.375 19.0494 25.375 19.8766 25.2758C20.7399 25.1732 21.4796 24.9538 22.1259 24.4475C22.7734 23.9435 23.1654 23.2785 23.4746 22.4665C23.7721 21.6883 24.0206 20.6908 24.3274 19.4623L24.3589 19.3398C24.8442 17.3973 25.2316 15.8457 25.3576 14.6148C25.4859 13.3432 25.3576 12.2372 24.6319 11.3073C24.3157 10.9023 23.9137 10.5724 23.4547 10.3413L22.7221 7.6545C22.4456 6.63833 22.2437 5.89867 21.8167 5.32233C21.3924 4.75111 20.8159 4.31083 20.1531 4.05183ZM8.48406 5.68167C8.74073 5.58133 9.05106 5.55217 9.82223 5.544C10.1512 6.23233 10.8536 6.70833 11.6656 6.70833H16.3322C17.1466 6.70833 17.8489 6.23233 18.1779 5.544C18.9491 5.55217 19.2594 5.58133 19.5161 5.68167C19.8731 5.82167 20.1834 6.0585 20.4121 6.3665C20.6174 6.643 20.7376 7.02917 21.0771 8.274L21.4901 9.78717C20.2791 9.625 18.7157 9.625 16.7732 9.625H11.2257C9.2844 9.625 7.72106 9.625 6.51006 9.78717L6.92306 8.274C7.2614 7.02917 7.38273 6.643 7.58806 6.3665C7.81651 6.05863 8.12702 5.82129 8.48406 5.68167ZM11.6667 4.375C11.5894 4.375 11.5152 4.40573 11.4605 4.46043C11.4058 4.51513 11.3751 4.58931 11.3751 4.66667C11.3751 4.74402 11.4058 4.81821 11.4605 4.87291C11.5152 4.9276 11.5894 4.95833 11.6667 4.95833H16.3334C16.4108 4.95833 16.4849 4.9276 16.5396 4.87291C16.5943 4.81821 16.6251 4.74402 16.6251 4.66667C16.6251 4.58931 16.5943 4.51513 16.5396 4.46043C16.4849 4.40573 16.4108 4.375 16.3334 4.375H11.6667ZM4.74723 12.3842C5.07273 11.9677 5.58723 11.6877 6.6489 11.5337C7.73506 11.3773 9.2074 11.375 11.2992 11.375H16.7009C18.7927 11.375 20.2639 11.3773 21.3501 11.5337C22.4129 11.6877 22.9274 11.9677 23.2529 12.3853C23.5784 12.8018 23.7254 13.3677 23.6157 14.4363C23.5049 15.5283 23.1502 16.9563 22.6427 18.9863C22.3196 20.279 22.0944 21.175 21.8401 21.8447C21.5927 22.491 21.3512 22.8328 21.0491 23.0697C20.7469 23.3053 20.3561 23.4558 19.6689 23.5387C18.9572 23.6238 18.0356 23.625 16.7009 23.625H11.2992C9.96456 23.625 9.04173 23.6238 8.33123 23.5387C7.6429 23.457 7.25323 23.3053 6.95106 23.0697C6.64773 22.8328 6.40623 22.491 6.16006 21.8447C5.90573 21.175 5.68056 20.279 5.35623 18.9863C4.8499 16.9563 4.49406 15.5283 4.38323 14.4363C4.27473 13.3677 4.42173 12.8007 4.74723 12.3842Z" fill="<?php echo isset($_GET['page']) && $_GET['page'] === 'gio-hang' ? '#218CFF' : 'black'; ?>" />
                                </svg>
                                <span class="d-none d-xl-inline-block">Giỏ hàng</span>
                                <span class="position-absolute num_in_cart"><?php if (isset($_SESSION['data_user']['email'])) {
                                                                                if ($totalQuantity > 0) {
                                                                                    echo $totalQuantity;
                                                                                } else if ($totalQuantity < 1) {
                                                                                    echo 0;
                                                                                }
                                                                            } else if (!isset($_SESSION['data_user']['email'])) {
                                                                                echo 0;
                                                                            } ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="navigation_header mt-4 mb-0 fs-6 text-uppercase d-flex justify-content-center list-unstyled">
                    <li class="position-relative pb-2 me-4 <?php echo !isset($_GET['page']) ? 'active' : ''; ?>">
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Trang chủ</a>
                    </li>
                    <li class="position-relative pb-2 me-4 category_header <?php echo isset($_GET['page']) && $_GET['page'] === 'danh-muc' && !isset($_GET['type']) ? 'active' : ''; ?>">
                        <span role="button" class="">
                            Danh mục
                            <i class="fa-sharp fa-solid fa-chevron-down ms-1"></i>
                        </span>
                        <div class="submenu position-absolute start-0 px-4 py-3 rounded-2">
                            <?php foreach ($NamesTypeCatagory as $row) : ?>
                                <span>
                                    <a href="index.php?page=danh-muc&maloai=<?php echo $row['maloai'] ?>"><?php echo $row['ten_loai'] ?></a>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </li>
                    <li class="position-relative pb-2 me-4 <?php echo isset($_GET['type']) && $_GET['type'] === 'san-pham-moi' ? 'active' : ''; ?>">
                        <a href="index.php?page=danh-muc&type=san-pham-moi">Sản phẩm mới</a>
                    </li>
                    <li class="position-relative pb-2 me-4 <?php echo isset($_GET['page']) && $_GET['page'] === 'lich-su-mua' ? 'active' : ''; ?>">
                        <a href="index.php?page=<?php echo isset($_COOKIE['user_id']) ? 'lich-su-mua&status=all' : 'dang-nhap' ?>">Lịch sử mua</a>
                    </li>
                    <li class="position-relative pb-2 me-4 <?php echo isset($_GET['page']) && $_GET['page'] === 'lien-he' ? 'active' : ''; ?>">
                        <a href="index.php?page=lien-he">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>