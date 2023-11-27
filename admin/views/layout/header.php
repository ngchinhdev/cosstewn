<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../public/admin/css/layout.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="grid_container">
        <header>
            <div class="left_site">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.2998 13.2C3.2998 12.7624 3.47364 12.3427 3.78308 12.0333C4.09251 11.7239 4.5122 11.55 4.9498 11.55H21.958C22.3956 11.55 22.8153 11.7239 23.1247 12.0333C23.4342 12.3427 23.608 12.7624 23.608 13.2C23.608 13.6376 23.4342 14.0573 23.1247 14.3667C22.8153 14.6762 22.3956 14.85 21.958 14.85H4.9498C4.5122 14.85 4.09251 14.6762 3.78308 14.3667C3.47364 14.0573 3.2998 13.6376 3.2998 13.2ZM3.2998 6.60001C3.2998 6.16241 3.47364 5.74272 3.78308 5.43329C4.09251 5.12385 4.5122 4.95001 4.9498 4.95001H28.0498C28.4874 4.95001 28.9071 5.12385 29.2165 5.43329C29.526 5.74272 29.6998 6.16241 29.6998 6.60001C29.6998 7.03762 29.526 7.4573 29.2165 7.76674C28.9071 8.07617 28.4874 8.25001 28.0498 8.25001H4.9498C4.5122 8.25001 4.09251 8.07617 3.78308 7.76674C3.47364 7.4573 3.2998 7.03762 3.2998 6.60001ZM3.2998 19.8C3.2998 19.3624 3.47364 18.9427 3.78308 18.6333C4.09251 18.3239 4.5122 18.15 4.9498 18.15H28.0498C28.4874 18.15 28.9071 18.3239 29.2165 18.6333C29.526 18.9427 29.6998 19.3624 29.6998 19.8C29.6998 20.2376 29.526 20.6573 29.2165 20.9667C28.9071 21.2762 28.4874 21.45 28.0498 21.45H4.9498C4.5122 21.45 4.09251 21.2762 3.78308 20.9667C3.47364 20.6573 3.2998 20.2376 3.2998 19.8ZM3.2998 26.4C3.2998 25.9624 3.47364 25.5427 3.78308 25.2333C4.09251 24.9239 4.5122 24.75 4.9498 24.75H21.958C22.3956 24.75 22.8153 24.9239 23.1247 25.2333C23.4342 25.5427 23.608 25.9624 23.608 26.4C23.608 26.8376 23.4342 27.2573 23.1247 27.5667C22.8153 27.8762 22.3956 28.05 21.958 28.05H4.9498C4.5122 28.05 4.09251 27.8762 3.78308 27.5667C3.47364 27.2573 3.2998 26.8376 3.2998 26.4Z" fill="#218CFF" />
                </svg>
                <div class="search-box">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="" id="" placeholder="Tìm kiếm ở đây ...">
                </div>
            </div>
            <div class="right_site">
                <div class="icon-box">
                    <div class="bell-i">
                        <div class="pulse"></div>
                        <i class="fa-regular fa-bell"></i>
                    </div>
                    <div class="email-i">
                        <div class="pulse"></div>
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="profile-pic">
                        <img src="../../public/admin/imgs/logo.png" alt="">
                    </div>
                </div>
            </div>
        </header>
        <aside>
            <div class="logo">
                <a href="<?= $_SERVER['PHP_SELF'] ?>"><img src="../../public/app/imgs/logo.png" alt=""></a>
            </div>
            <ul class="sidebar_menu">
                <li class="active">
                    <div class="link" data-control="dashboard">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M8.00016 26.6667C9.46683 26.6667 10.6668 25.4667 10.6668 24V14.6667C10.6668 13.2 9.46683 12 8.00016 12C6.5335 12 5.3335 13.2 5.3335 14.6667V24C5.3335 25.4667 6.5335 26.6667 8.00016 26.6667ZM21.3335 20V24C21.3335 25.4667 22.5335 26.6667 24.0002 26.6667C25.4668 26.6667 26.6668 25.4667 26.6668 24V20C26.6668 18.5333 25.4668 17.3333 24.0002 17.3333C22.5335 17.3333 21.3335 18.5333 21.3335 20ZM16.0002 26.6667C17.4668 26.6667 18.6668 25.4667 18.6668 24V8.00001C18.6668 6.53334 17.4668 5.33334 16.0002 5.33334C14.5335 5.33334 13.3335 6.53334 13.3335 8.00001V24C13.3335 25.4667 14.5335 26.6667 16.0002 26.6667Z" fill="black" />
                            </svg>
                            Thống kê</span>
                    </div>
                </li>
                <li class="">
                    <div class="link" data-control="role">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M20 28H17.3333C16.6261 28 15.9478 27.719 15.4477 27.219C14.9476 26.7189 14.6667 26.0406 14.6667 25.3333C14.6667 24.6261 14.9476 23.9478 15.4477 23.4477C15.9478 22.9476 16.6261 22.6667 17.3333 22.6667H20V20H17.3333C15.9188 20 14.5623 20.5619 13.5621 21.5621C12.5619 22.5623 12 23.9188 12 25.3333C12 26.7478 12.5619 28.1044 13.5621 29.1046C14.5623 30.1048 15.9188 30.6667 17.3333 30.6667H20V28ZM30.6667 25.3333C30.6667 26.7478 30.1048 28.1044 29.1046 29.1046C28.1044 30.1048 26.7478 30.6667 25.3333 30.6667H22.6667V28H25.3333C26.0406 28 26.7189 27.719 27.219 27.219C27.719 26.7189 28 26.0406 28 25.3333C28 24.6261 27.719 23.9478 27.219 23.4477C26.7189 22.9476 26.0406 22.6667 25.3333 22.6667H22.6667V20H25.3333C26.7478 20 28.1044 20.5619 29.1046 21.5621C30.1048 22.5623 30.6667 23.9188 30.6667 25.3333Z" fill="black" fill-opacity="0.7" />
                                <path d="M18.6667 24.0003H24V26.6669H18.6667V24.0003ZM9.33333 25.3336C9.33594 24.8866 9.37608 24.4406 9.45333 24.0003H4V22.1336C4 19.4669 9.33333 18.0003 12 18.0003C12.6035 18.0081 13.2054 18.0638 13.8 18.1669C14.8976 17.62 16.107 17.3347 17.3333 17.3336H24V5.3336C23.9979 4.62701 23.7163 3.94996 23.2166 3.45032C22.717 2.95068 22.0399 2.66905 21.3333 2.66694H15.76C15.487 1.88752 14.9785 1.21221 14.3049 0.734428C13.6313 0.256644 12.8258 0 12 0C11.1742 0 10.3687 0.256644 9.69511 0.734428C9.0215 1.21221 8.51302 1.88752 8.24 2.66694H2.66667C1.96007 2.66905 1.28302 2.95068 0.78338 3.45032C0.28374 3.94996 0.0021103 4.62701 0 5.3336L0 24.0003C0.0021103 24.7069 0.28374 25.3839 0.78338 25.8836C1.28302 26.3832 1.96007 26.6648 2.66667 26.6669H9.45333C9.37608 26.2266 9.33594 25.7806 9.33333 25.3336ZM12 2.66694C12.2637 2.66694 12.5215 2.74514 12.7408 2.89164C12.96 3.03815 13.1309 3.24639 13.2318 3.49003C13.3328 3.73366 13.3592 4.00175 13.3077 4.26039C13.2563 4.51903 13.1293 4.75661 12.9428 4.94308C12.7563 5.12955 12.5188 5.25654 12.2601 5.30798C12.0015 5.35943 11.7334 5.33303 11.4898 5.23211C11.2461 5.13119 11.0379 4.9603 10.8914 4.74103C10.7449 4.52176 10.6667 4.26398 10.6667 4.00027C10.6677 3.64697 10.8085 3.30845 11.0584 3.05863C11.3082 2.80881 11.6467 2.66799 12 2.66694ZM12 8.00027C12.7911 8.00027 13.5645 8.23487 14.2223 8.67439C14.8801 9.11392 15.3928 9.73863 15.6955 10.4695C15.9983 11.2004 16.0775 12.0047 15.9231 12.7806C15.7688 13.5566 15.3878 14.2693 14.8284 14.8287C14.269 15.3881 13.5563 15.7691 12.7804 15.9234C12.0044 16.0778 11.2002 15.9985 10.4693 15.6958C9.73836 15.393 9.11365 14.8803 8.67412 14.2226C8.2346 13.5648 8 12.7914 8 12.0003C7.9993 11.4748 8.10228 10.9543 8.30305 10.4687C8.50382 9.98309 8.79843 9.54185 9.17001 9.17028C9.54158 8.7987 9.98282 8.50409 10.4684 8.30332C10.9541 8.10255 11.4745 7.99957 12 8.00027Z" fill="black" fill-opacity="0.7" />
                            </svg>
                            </i>Vai trò</span>
                    </a>
                </li>
                <li class="">
                    <div class="link" data-control="user">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M16.0002 5.33334C17.4147 5.33334 18.7712 5.89525 19.7714 6.89544C20.7716 7.89563 21.3335 9.25219 21.3335 10.6667C21.3335 12.0812 20.7716 13.4377 19.7714 14.4379C18.7712 15.4381 17.4147 16 16.0002 16C14.5857 16 13.2291 15.4381 12.2289 14.4379C11.2287 13.4377 10.6668 12.0812 10.6668 10.6667C10.6668 9.25219 11.2287 7.89563 12.2289 6.89544C13.2291 5.89525 14.5857 5.33334 16.0002 5.33334ZM16.0002 18.6667C21.8935 18.6667 26.6668 21.0533 26.6668 24V26.6667H5.3335V24C5.3335 21.0533 10.1068 18.6667 16.0002 18.6667Z" fill="black" fill-opacity="1" />
                            </svg>
                            </i>Người dùng</span>
                    </a>
                </li>
                <li class="">
                    <div class="link" data-control="category">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="28" viewBox="0 0 26 28" fill="none">
                                <path d="M25.6698 21.792L13.3886 27.9058C13.2437 27.9679 13.0878 28 12.9302 28C12.7725 28 12.6166 27.9679 12.4717 27.9058L0.189844 21.792C-0.0601562 21.667 -0.0601562 21.462 0.189844 21.3364L3.13109 19.8752C3.27616 19.813 3.43234 19.781 3.59016 19.781C3.74798 19.781 3.90415 19.813 4.04922 19.8752L12.4717 24.0627C12.6165 24.1251 12.7725 24.1574 12.9302 24.1574C13.0878 24.1574 13.2438 24.1251 13.3886 24.0627L21.8111 19.8752C21.956 19.813 22.1121 19.7809 22.2698 19.7809C22.4276 19.7809 22.5836 19.813 22.7286 19.8752L25.6698 21.3395C25.923 21.462 25.923 21.667 25.6698 21.792ZM25.6698 13.2589L22.7286 11.7945C22.5836 11.7324 22.4276 11.7003 22.2698 11.7003C22.1121 11.7003 21.956 11.7324 21.8111 11.7945L13.3886 15.987C13.2437 16.0489 13.0877 16.0808 12.9302 16.0808C12.7726 16.0808 12.6166 16.0489 12.4717 15.987L4.04922 11.7945C3.90415 11.7324 3.74798 11.7003 3.59016 11.7003C3.43234 11.7003 3.27616 11.7324 3.13109 11.7945L0.189844 13.2589C-0.0601562 13.3839 -0.0601562 13.5895 0.189844 13.7158L12.4717 19.8283C12.6166 19.8904 12.7725 19.9225 12.9302 19.9225C13.0878 19.9225 13.2437 19.8904 13.3886 19.8283L25.6698 13.7158C25.923 13.5895 25.923 13.3845 25.6698 13.2589ZM0.189844 6.15142L12.4711 11.7945C12.7658 11.9102 13.0933 11.9102 13.388 11.7945L25.6698 6.15142C25.9198 6.03517 25.9198 5.84579 25.6698 5.73017L13.388 0.0876661C13.0935 -0.029222 12.7655 -0.029222 12.4711 0.0876661L0.189844 5.73017C-0.0632813 5.84579 -0.0632813 6.03517 0.189844 6.15142Z" fill="black" />
                            </svg>
                            </i>Loại hàng</span>
                    </a>
                </li>
                <li class="">
                    <div class="link" data-control="product">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_685_1525)">
                                    <path d="M20.3937 13.675C20.3937 14.9563 19.35 16 18.0688 16H13.675V11.35H18.0688C19.35 11.35 20.3937 12.3938 20.3937 13.675ZM31.5 16C31.5 24.5625 24.5625 31.5 16 31.5C7.4375 31.5 0.5 24.5625 0.5 16C0.5 7.4375 7.4375 0.5 16 0.5C24.5625 0.5 31.5 7.4375 31.5 16ZM23.4937 13.675C23.4937 10.6812 21.0625 8.25 18.0688 8.25H10.575V23.75H13.675V19.1H18.0688C21.0625 19.1 23.4937 16.6688 23.4937 13.675Z" fill="#454545" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_685_1525">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Sản phẩm</span>
                    </div>
                </li>
                <li>
                    <div class="link" data-control="order">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="none">
                                <path d="M29.25 16.5H28.5V11.4328C28.5 10.8375 28.2609 10.2656 27.8391 9.84375L23.1562 5.16094C22.7344 4.73906 22.1625 4.5 21.5672 4.5H19.5V2.25C19.5 1.00781 18.4922 0 17.25 0H5.25C4.00781 0 3 1.00781 3 2.25V4.5H0.375C0.16875 4.5 0 4.66875 0 4.875V5.625C0 5.83125 0.16875 6 0.375 6H13.125C13.3313 6 13.5 6.16875 13.5 6.375V7.125C13.5 7.33125 13.3313 7.5 13.125 7.5H1.875C1.66875 7.5 1.5 7.66875 1.5 7.875V8.625C1.5 8.83125 1.66875 9 1.875 9H11.625C11.8313 9 12 9.16875 12 9.375V10.125C12 10.3313 11.8313 10.5 11.625 10.5H0.375C0.16875 10.5 0 10.6687 0 10.875V11.625C0 11.8313 0.16875 12 0.375 12H10.125C10.3313 12 10.5 12.1687 10.5 12.375V13.125C10.5 13.3313 10.3313 13.5 10.125 13.5H3V19.5C3 21.9844 5.01562 24 7.5 24C9.98438 24 12 21.9844 12 19.5H18C18 21.9844 20.0156 24 22.5 24C24.9844 24 27 21.9844 27 19.5H29.25C29.6625 19.5 30 19.1625 30 18.75V17.25C30 16.8375 29.6625 16.5 29.25 16.5ZM7.5 21.75C6.25781 21.75 5.25 20.7422 5.25 19.5C5.25 18.2578 6.25781 17.25 7.5 17.25C8.74219 17.25 9.75 18.2578 9.75 19.5C9.75 20.7422 8.74219 21.75 7.5 21.75ZM22.5 21.75C21.2578 21.75 20.25 20.7422 20.25 19.5C20.25 18.2578 21.2578 17.25 22.5 17.25C23.7422 17.25 24.75 18.2578 24.75 19.5C24.75 20.7422 23.7422 21.75 22.5 21.75ZM26.25 12H19.5V6.75H21.5672L26.25 11.4328V12Z" fill="#454545" />
                            </svg>
                            Đơn hàng</span>
                    </div>
                </li>
                <li>
                    <div class="link" data-control="promote">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <g clip-path="url(#clip0_685_1528)">
                                    <path d="M17.0533 28.0001L4 14.9468V17.6134C4 18.3201 4.28 19.0001 4.78667 19.4934L15.1733 29.8801C16.2133 30.9201 17.9067 30.9201 18.9467 29.8801L27.2267 21.6001C28.2667 20.5601 28.2667 18.8668 27.2267 17.8268L17.0533 28.0001Z" fill="black" fill-opacity="0.8" />
                                    <path d="M15.1733 23.2133C16.2133 24.2533 17.9067 24.2533 18.9467 23.2133L27.2267 14.9333C28.2667 13.8933 28.2667 12.2 27.2267 11.16L16.84 0.773333C16.3335 0.279069 15.6543 0.00166044 14.9467 0L6.66667 0C5.2 0 4 1.2 4 2.66667V10.9467C4 11.6533 4.28 12.3333 4.78667 12.8267L15.1733 23.2133ZM9.66667 4C10.1087 4 10.5326 4.17559 10.8452 4.48816C11.1577 4.80072 11.3333 5.22464 11.3333 5.66667C11.3333 6.10869 11.1577 6.53262 10.8452 6.84518C10.5326 7.15774 10.1087 7.33333 9.66667 7.33333C9.22464 7.33333 8.80072 7.15774 8.48816 6.84518C8.17559 6.53262 8 6.10869 8 5.66667C8 5.22464 8.17559 4.80072 8.48816 4.48816C8.80072 4.17559 9.22464 4 9.66667 4Z" fill="black" fill-opacity="0.8" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_685_1528">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Giảm giá</span>
                    </div>
                </li>
                <li>
                    <div class="link" data-control="comment">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M28.8002 9.5999V20.7999C28.8002 22.5599 27.3602 23.9999 25.6002 23.9999H19.2002V28.7999L12.8002 23.9999H6.4002C4.6386 23.9999 3.2002 22.5599 3.2002 20.7999V9.5999C3.2002 7.8399 4.6386 6.3999 6.4002 6.3999H25.6002C27.3602 6.3999 28.8002 7.8399 28.8002 9.5999Z" fill="black" fill-opacity="0.73" />
                            </svg>

                            Bình luận</span>
                    </div>
                </li>
            </ul>
        </aside>
        <main>
            <div class="container">