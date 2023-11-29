$(document).ready(function () {
    const container = $('.container');

    // Load trang thêm sản phẩm
    $(document).on("click", ".btn-add", function (e) {
        const curPage = $(this).data('control');
        const curPageParent = $(this).data('control-parent');
        container.load(`../controllers/${curPageParent}Controller/${curPage}Controller.php`);
    });

    // Load trang cập nhật sản phẩm
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

    // Load trang chi tiết đánh giá
    $(document).on("click", ".btn-detailFB", function (e) {
        const masp = $(this).data('tablefb-masp');
        const namesp = $(this).data('tablefb-nameprd');
        $.ajax({
            url: 'commentController/detailFBController.php',
            type: 'POST',
            data: {
                masp: masp,
                namesp: namesp
            },
            success: function (data) {
                $(".container").html(data);
            }
        });
    });
});
