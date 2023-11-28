$(document).ready(function () {
    $(document).on("click", ".pagingOrder a.page-link", function (e) {
        e.preventDefault();
        var pageNumber = $(this).data("number-page");
        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'orderController/orderController.php',
            type: 'POST',
            data: {
                pageNumber: pageNumber
            },
            success: function (data) {
                $("#pageOrder").html(data);
            }
        });
    });
}); 