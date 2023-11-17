document.addEventListener('DOMContentLoaded', function () {
    var checkboxes = document.querySelectorAll('.custom-checkbox');

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

            // Lưu trạng thái của checkbox vào session storage và đặt các giá trị khác thành false
            var savedSelections = {};
            savedSelections[selectedValue] = checkbox.checked;

            checkboxes.forEach(function (otherCheckbox) {
                var otherValue = otherCheckbox.nextElementSibling.querySelector('p').textContent.trim();
                if (otherCheckbox !== checkbox) {
                    savedSelections[otherValue] = false;
                }
            });

            sessionStorage.setItem('checkboxSelections', JSON.stringify(savedSelections));

            // Loại bỏ checked của các checkbox khác trong cùng một nhóm
            checkboxes.forEach(function (otherCheckbox) {
                var otherValue = otherCheckbox.nextElementSibling.querySelector('p').textContent.trim();
                if (otherCheckbox !== checkbox && savedSelections.hasOwnProperty(otherValue)) {
                    otherCheckbox.checked = false;
                }
            });

            // Kiểm tra nếu không có checkbox nào được chọn thì xóa tham số từ URL
            var allCheckboxUnchecked = Object.values(savedSelections).every(function (value) {
                return value === false;
            });

            if (allCheckboxUnchecked) {
                currentURL.searchParams.delete('priceRange');
            }

            window.location.href = currentURL.toString();
        });
    });

    // Khôi phục trạng thái của checkbox từ session khi trang được tải
    var savedSelections = JSON.parse(sessionStorage.getItem('checkboxSelections')) || {};

    checkboxes.forEach(function (checkbox) {
        var checkboxLabel = checkbox.nextElementSibling.querySelector('p').textContent.trim();

        if (savedSelections.hasOwnProperty(checkboxLabel)) {
            checkbox.checked = savedSelections[checkboxLabel];
        }
    });
});

// Lưu trạng thái checkbox vào session khi có sự kiện click
document.addEventListener('click', function (event) {
    var target = event.target;
    if (target.type === 'checkbox' && target.classList.contains('custom-checkbox')) {
        var checkboxLabel = target.nextElementSibling.querySelector('p').textContent.trim();
        var savedSelections = {};
        savedSelections[checkboxLabel] = target.checked;

        checkboxes.forEach(function (otherCheckbox) {
            var otherValue = otherCheckbox.nextElementSibling.querySelector('p').textContent.trim();
            if (otherCheckbox !== target) {
                savedSelections[otherValue] = false;
            }
        });

        sessionStorage.setItem('checkboxSelections', JSON.stringify(savedSelections));

        // Kiểm tra nếu không có checkbox nào được chọn thì xóa tham số từ URL
        var allCheckboxUnchecked = Object.values(savedSelections).every(function (value) {
            return value === false;
        });

        if (allCheckboxUnchecked) {
            var currentURL = new URL(window.location.href);
            currentURL.searchParams.delete('priceRange');
            window.history.replaceState({}, '', currentURL.toString());
        }

        // Kiểm tra nếu checkbox không được chọn, thì xóa tham số từ URL
        var currentURL = new URL(window.location.href);
        if (!target.checked) {
            currentURL.searchParams.delete('priceRange');
        }

        window.history.replaceState({}, '', currentURL.toString());
    }
});
