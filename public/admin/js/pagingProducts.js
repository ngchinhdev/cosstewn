$(document).ready(function () {
    $(document).on("click", ".pagination a.page-link", function (e) {
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
});

