$(function() {
    const container = $('.container');
    container.load(`../controllers/dashboardController/dashboardController.php`);

    $('.link').on('click', function() {
        const linkParent = $(this).parent('li');
        linkParent.siblings().removeClass('active');
        linkParent.addClass('active');

        const curPage = $(this).data('control');
        container.load(`../controllers/${curPage}Controller/${curPage}Controller.php`);
    })
})