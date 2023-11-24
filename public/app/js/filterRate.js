document.addEventListener('DOMContentLoaded', function () {
    var checkboxes = document.querySelectorAll('.custom-checkbox2');
    // Kiểm tra trước khi khôi phục trạng thái
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('click', function () {
            var selectedValue = checkbox.nextElementSibling.querySelector('p').textContent.trim();
            var currentURL = new URL(window.location.href);

            switch (selectedValue) {
                case 'Dưới 20%':
                    currentURL.searchParams.set('rateRange', 'under20');
                    break;
                case 'Từ 20% - 30%':
                    currentURL.searchParams.set('rateRange', '20to30');
                    break;
                case 'Từ 30% - 40%':
                    currentURL.searchParams.set('rateRange', '30to40');
                    break;
                case 'Từ 40% - 50%':
                    currentURL.searchParams.set('rateRange', '40to50');
                    break;
                case 'Trên 50%':
                    currentURL.searchParams.set('rateRange', 'above50');
                    break;
                default:
                    currentURL.searchParams.delete('rateRange');
            }

            if (currentURL.searchParams.has('pageNumber')) {
                currentURL.searchParams.delete('pageNumber');
            }


            window.location.href = currentURL.toString();
        });
    });
});

