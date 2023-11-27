$(function() {
    const container = $('.container');
    container.load(`../controllers/categoryController/categoryController.php`);

    $(document).on('click', '.link', function() {
        const linkParent = $(this).parent('li');
        linkParent.siblings().removeClass('active');
        linkParent.addClass('active');

        const curPage = $(this).data('control');
        container.load(`../controllers/${curPage}Controller/${curPage}Controller.php`);
        console.log(`../controllers/${curPage}Controller/${curPage}Controller.php`);
    })
})

