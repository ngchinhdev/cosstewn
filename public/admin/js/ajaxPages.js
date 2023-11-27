$(document).ready(function () {
    const container = $('.container');
    $(document).on("click", ".btn-add", function (e) {
        const curPage = $(this).data('control');
        const curPageParent = $(this).data('control-parent');
        container.load(`../controllers/${curPageParent}Controller/${curPage}Controller.php`);
    });

    $(document).on("click", ".fix-items", function (e) {
        const masp = $(this).data('masp');

        $.ajax({
            url: 'productController/fixproductController.php',
            type: 'POST',
            data: {
                masp: masp
            },
            success: function (data) {
                $(".container").html(data);
            }
        });
    });
});
