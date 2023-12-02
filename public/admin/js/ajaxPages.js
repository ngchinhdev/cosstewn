$(document).ready(function () {
    const container = $('.container');

    // Load trang thêm sản phẩm
    $(document).on("click", ".btn-add", function (e) {
        const curPage = $(this).data('control');
        const curPageParent = $(this).data('control-parent');
        container.load(`../controllers/${curPageParent}Controller/${curPage}Controller.php`);
    });

    // Load trang thêm khuyến mãi
    $(document).on("click", ".btn-addPromo", function (e) {
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

    // Load trang chi tiết khuyến mãi
    $(document).on("click", ".btn-detailPromo", function (e) {
        const makm = $(this).data('promo-makm');
        const namekm = $(this).data('promo-namekm');
        $.ajax({
            url: 'promoteController/detailpromoController.php',
            type: 'POST',
            data: {
                makm: makm,
                namekm: namekm
            },
            success: function (data) {
                $(".container").html(data);
            }
        });
    });

    // Load trang thêm thêm sản phẩm được áp dụng khuyến mãi
    $(document).on("click", "#btn-adddetailpromo", function (e) {
        const makm = $(this).data('promo-makm');
        const namekm = $(this).data('promo-namekm');
        $.ajax({
            url: 'promoteController/insertdetailpromoController.php',
            type: 'POST',
            data: {
                makm: makm,
                namekm: namekm
            },
            success: function (data) {
                console.log(makm);
                console.log(namekm);
                $(".container").html(data);
            }
        });
    });

});
