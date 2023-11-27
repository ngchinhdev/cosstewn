$(function() {
    $(document).on("click", ".pag-ctrl", function() {
        const container = $('.container');
        const curPage = Number($(this).data('pag'));

        $.ajax({
            url: 'categoryController/categoryController.php',
            type: 'GET',
            data: {
                pagNum: curPage
            },
            success: function (data) {
                container.html(data);
            }
        })
    })
})