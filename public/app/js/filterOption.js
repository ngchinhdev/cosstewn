$(document).ready(function () {
    var dropdownItems = document.querySelectorAll('.filter-option');

    dropdownItems.forEach(function (item) {
        item.addEventListener('click', function (event) {
            event.preventDefault();

            var selectedOption = item.getAttribute('data-filter-option');
            var currentURL = new URL(window.location.href);

            // Xóa tham số filterOption nếu đã tồn tại trong URL
            if (currentURL.searchParams.has('filterOption')) {
                currentURL.searchParams.delete('filterOption');
            }
            currentURL.searchParams.set('filterOption', selectedOption);

            // Xóa tham số pageNumber nếu đã tồn tại trong URL
            if (currentURL.searchParams.has('pageNumber')) {
                currentURL.searchParams.delete('pageNumber');
            }

            // Chuyển hướng đến URL mới
            window.location.href = currentURL.toString();
        });
    });
});
