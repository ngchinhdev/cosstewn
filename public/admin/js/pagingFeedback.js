$(document).ready(function () {
    $(document).on("click", ".pagingfb a.page-link", function (e) {
        e.preventDefault();

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
        var masp = $('.pagingDetailfb').data("fb-masp");
        var namesp = $('.pagingDetailfb').data("fb-namesp");
        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'commentController/detailFBController.php',
            type: 'POST',
            data: {
                masp: masp,
                pageNumber: pageNumber,
                namesp: namesp
            },
            success: function (data) {
                $("#pageDetailFB").html(data);
            }
        });
    });
});