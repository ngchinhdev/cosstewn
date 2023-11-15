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
                $('#container-response').html(response);
            },
            error: function (xhr, status, error) {
                // Handle errors here
            }
        });
    }

    var initialPageNumber = 1;
    updatePage(initialPageNumber);

    $(document).on("click", ".node-number", function () {
        var pageNumber = $(this).data("page-num");
        updatePage(pageNumber);
    });

    $(document).on("click", ".prev-page", function () {
        var pageNumber = $(this).data("page-prev");
        updatePage(pageNumber);
    });

    $(document).on("click", ".next-page", function () {
        var pageNumber = $(this).data("page-next");
        updatePage(pageNumber);
    });
});
