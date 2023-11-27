$(document).ready(function () {
    // Bắt sự kiện khi click vào nút chuyển trang
    $(document).on("click", ".pagingprd a.page-link", function (e) {
        e.preventDefault();
        console.log(1);
        var pageNumber = $(this).data("number-page");

        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'productController/productController.php',
            type: 'POST',
            data: {
                pageNumber: pageNumber
            },
            success: function (data) {
                $("#pageProduct").html(data);
            }
        });
    });

    // Sự kiện khi click vào nút xóa sản phẩm
    $(document).on("click", ".remove-items", function (e) {
        e.preventDefault();
        var currentpage = $(this).data("current-page");
        var removemasp = $(this).data("remove-masp");

        // Sử dụng SweetAlert2 thay vì hộp thoại xác nhận mặc định
        Swal.fire({
            title: 'Xác nhận',
            text: 'Bạn có chắc chắn muốn xóa sản phẩm này?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng nhấn Đồng ý
                $.ajax({
                    url: 'productController/productController.php',
                    type: 'POST',
                    data: {
                        currentpage: currentpage,
                        removemasp: removemasp
                    },
                    success: function (data) {
                        Swal.fire({
                            title: 'Thành công',
                            text: 'Dữ liệu đã được xóa thành công!',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000
                        });
                        $("#pageProduct").html(data);
                    }
                });
            }
        });
    });

}); 
