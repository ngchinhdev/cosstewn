$(function() {
    const container = $('.container');
    console.log(container);

    $('.link').on('click', function() {
        const linkParent = $(this).parent('li');
        linkParent.siblings().removeClass('active');
        linkParent.addClass('active');

        console.log($(this).data('control'));
        const curPage = $(this).data('control');
        container.load(`../controllers/${curPage}Controller/${curPage}Controller.php`);
        console.log(`../controllers/${curPage}Controller/${curPage}Controller.php`);
    })
})

$(document).ready(function () {
    // Bắt sự kiện khi click vào nút chuyển trang
    $(".pagination a.page-link").on("click", function (e) {
        e.preventDefault();
        console.log('Thành công')
        var pageNumber = $(this).data("number-page");

        // Gửi yêu cầu Ajax để load dữ liệu cho trang mới
        $.ajax({
            url: 'productController/productController.php',
            type: 'POST',
            data: {
                pageNumber: pageNumber
            },
            success: function (data) {
                console.log(pageNumber);
                $("#box-pageProducts").html(data);
            }
        });
    });
});
