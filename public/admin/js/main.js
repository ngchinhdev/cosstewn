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