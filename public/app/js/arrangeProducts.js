function updatePage(pageNumber) {
    pageNumber = Math.max(1, pageNumber);

    var currentURL = new URL(window.location.href);
    currentURL.searchParams.set('pageNumber', pageNumber);

    window.history.replaceState({}, '', currentURL);
    var brandIdElement = document.getElementById("container-response");
    var brandId = brandIdElement.getAttribute("data-brand-id");
    var newProducts = brandIdElement.getAttribute("data-new-products");
    var totalpage = brandIdElement.getAttribute("data-total-page");
    var filterPrice = brandIdElement.getAttribute("data-filter-price");
    var filterRate = brandIdElement.getAttribute("data-filter-rate");
    var filterOptions = brandIdElement.getAttribute("data-filter-options");
    $.ajax({
        url: "catalogController/catalog.php",
        type: "POST",
        dataType: "html",
        data: {
            filterPrice: filterPrice,
            filterRate: filterRate,
            filterOptions: filterOptions,
            brandId: brandId,
            pageNumber: pageNumber,
            newProducts: newProducts,
            totalpage: totalpage
        },
        success: function (response) {
            $('#container-response').hide();

            // Thêm nội dung mới
            $('#container-response').html(response);

            // Hiển thị nội dung mới mà không có hiệu ứng và cuộn lên từ từ
            $('#container-response').show(0, function () {
                // Cuộn lên đầu trang
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });
        },
        error: function (xhr, status, error) {
            // Xử lý lỗi ở đây
        }
    });
}

$(document).on("click", ".node-number, .prev-page, .next-page", function (event) {
    event.preventDefault();
    var pageNumber = $(this).data("page-num") || $(this).data("page-prev") || $(this).data("page-next");
    updatePage(pageNumber);
    return false;
});