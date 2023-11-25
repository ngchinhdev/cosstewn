$(document).ready(function () {
    // Bắt sự kiện khi click vào nút chuyển trang
    $(".pagination a.page-link").on("click", function (e) {
        e.preventDefault();
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
});
