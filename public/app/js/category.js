$(document).ready(function () {
    $('.custom-checkbox').on('change', function () {
        $('.custom-checkbox').not(this).prop('checked', false);
    });
});
$(document).ready(function () {
    $('.custom-checkbox2').on('change', function () {
        $('.custom-checkbox2').not(this).prop('checked', false);
    });
});
const menuMultilevels = document.querySelectorAll('.filter-price');
const subMenus = document.querySelectorAll('.checkbox-group');
const iconMenus = document.querySelectorAll('.filter-price .fa-chevron-up');

menuMultilevels.forEach((menuMultilevel, index) => {
    menuMultilevel.addEventListener('click', function (event) {
        event.preventDefault();
        subMenus[index].classList.toggle('active');
        iconMenus[index].classList.toggle('active');
    });
});