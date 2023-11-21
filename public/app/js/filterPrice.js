document.addEventListener('DOMContentLoaded', function () {
    var checkboxes = document.querySelectorAll('.custom-checkbox');
    // Kiểm tra trước khi khôi phục trạng thái
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('click', function () {
            var selectedValue = checkbox.nextElementSibling.querySelector('p').textContent.trim();
            var currentURL = new URL(window.location.href);

            switch (selectedValue) {
                case 'Dưới 500.000₫':
                    currentURL.searchParams.set('priceRange', 'under500k');
                    break;
                case '500.000₫ - 1.000.000₫':
                    currentURL.searchParams.set('priceRange', '500kto1m');
                    break;
                case '1.000.000₫ - 1.500.000₫':
                    currentURL.searchParams.set('priceRange', '1mto1.5m');
                    break;
                case '1.500.000₫ - 2.000.000₫':
                    currentURL.searchParams.set('priceRange', '1.5mto2m');
                    break;
                case 'Trên 2.000.000₫':
                    currentURL.searchParams.set('priceRange', 'above2m');
                    break;
                default:
                    currentURL.searchParams.delete('priceRange');
            }

            if (currentURL.searchParams.has('pageNumber')) {
                currentURL.searchParams.delete('pageNumber');
            }


            window.location.href = currentURL.toString();
        });
    });
});
