$(document).ready(function () {
    $(document).on("click", ".pagingfb a.page-link", function (e) {
        e.preventDefault();
        console.log(1);
        var pageNumber = $(this).data("number-page");

        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'commentController/commentController.php',
            type: 'POST',
            data: {
                pageNumber: pageNumber
            },
            success: function (data) {
                $("#pageFeedback").html(data);
            }
        });
    });

    // phân trang chi tiết đánh giá
    $(document).on("click", ".pagingDetailfb a.page-link", function (e) {
        e.preventDefault();
        var pageNumber = $(this).data("number-page");
        var masp = $('.pagination-container').data("fb-masp");
        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'commentController/detailFBController.php',
            type: 'POST',
            data: {
                masp: masp,
                pageNumber: pageNumber
            },
            success: function (data) {
                $("#pageDetailFB").html(data);
            }
        });
    });
});