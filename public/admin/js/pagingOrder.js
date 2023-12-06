$(document).ready(function () {
    $(document).on("click", ".pagingOrder a.page-link", function (e) {
        e.preventDefault();
        var pageNumber = $(this).data("number-page");
        var numberlast = $('.pagingOrder').data("number-last");
        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'orderController/orderController.php',
            type: 'POST',
            data: {
                pageNumber: pageNumber,
                numberlast: numberlast
            },
            success: function (data) {
                console.log(numberlast);
                $("#pageOrder").html(data);
            }
        });
    });
}); 