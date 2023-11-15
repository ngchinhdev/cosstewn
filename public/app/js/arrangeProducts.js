$(document).ready(function () {
    function updatePage(pageNumber) {
        pageNumber = Math.max(1, pageNumber);

        var currentURL = new URL(window.location.href);
        currentURL.searchParams.set('pageNumber', pageNumber);

        window.history.replaceState({}, '', currentURL);
        var brandIdElement = document.getElementById("container-response");
        var brandId = brandIdElement.getAttribute("data-brand-id");
        var newProducts = brandIdElement.getAttribute("data-new-products");
        var totalpage = brandIdElement.getAttribute("data-total-page");
        $.ajax({
            url: "catalogController/catalog.php",
            type: "POST",
            dataType: "html",
            data: {
                brandId: brandId,
                pageNumber: pageNumber,
                newProducts: newProducts,
                totalpage: totalpage
            },
            success: function (response) {
                // Ẩn nội dung hiện tại với hiệu ứng fadeOut
                $('#container-response').fadeOut('slow', function () {
                    // Thêm nội dung mới
                    $(this).html(response);
                    // Hiển thị nội dung mới với hiệu ứng fadeIn và cuộn lên từ từ
                    $(this).fadeIn('slow', function () {
                        // Cuộn lên đầu trang
                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    });
                });
            },
            error: function (xhr, status, error) {
                // Xử lý lỗi ở đây
            }
        });
    }

    var initialPageNumber = 1;
    updatePage(initialPageNumber);

    $(document).on("click", ".node-number, .prev-page, .next-page", function (event) {
        event.preventDefault();
        var pageNumber = $(this).data("page-num") || $(this).data("page-prev") || $(this).data("page-next");
        updatePage(pageNumber);
        return false;
    });
});
