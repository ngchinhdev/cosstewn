$(document).ready(function () {
    const container = $('.container');
    $(document).on("click", ".btn-add", function (e) {
        const curPage = $(this).data('control');
        container.load(`../controllers/${curPage}Controller/${curPage}Controller.php`);
    });

    $(document).on("click", ".fix-items", function (e) {
        const masp = $(this).data('masp');

        $.ajax({
            url: 'fixproductController/fixproductController.php',
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
