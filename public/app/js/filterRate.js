document.addEventListener('DOMContentLoaded', function () {
    var checkboxes = document.querySelectorAll('.custom-checkbox2');

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

            // Lưu trạng thái của checkbox vào session storage và đặt các giá trị khác thành false
            var savedSelections2 = {};
            savedSelections2[selectedValue] = checkbox.checked;

            checkboxes.forEach(function (otherCheckbox) {
                var otherValue = otherCheckbox.nextElementSibling.querySelector('p').textContent.trim();
                if (otherCheckbox !== checkbox) {
                    savedSelections2[otherValue] = false;
                }
            });

            sessionStorage.setItem('checkboxSelections2', JSON.stringify(savedSelections2));

            // Loại bỏ checked của các checkbox khác trong cùng một nhóm
            checkboxes.forEach(function (otherCheckbox) {
                var otherValue = otherCheckbox.nextElementSibling.querySelector('p').textContent.trim();
                if (otherCheckbox !== checkbox && savedSelections2.hasOwnProperty(otherValue)) {
                    otherCheckbox.checked = false;
                }
            });

            // Kiểm tra nếu không có checkbox nào được chọn thì xóa tham số từ URL
            var allCheckboxUnchecked = Object.values(savedSelections2).every(function (value) {
                return value === false;
            });

            if (allCheckboxUnchecked) {
                currentURL.searchParams.delete('rateRange');
            }

            window.location.href = currentURL.toString();
        });
    });

    // Khôi phục trạng thái của checkbox từ session khi trang được tải
    var savedSelections2 = JSON.parse(sessionStorage.getItem('checkboxSelections2')) || {};

    checkboxes.forEach(function (checkbox) {
        var checkboxLabel = checkbox.nextElementSibling.querySelector('p').textContent.trim();

        if (savedSelections2.hasOwnProperty(checkboxLabel)) {
            checkbox.checked = savedSelections2[checkboxLabel];
        }
    });
});

// Lưu trạng thái checkbox vào session khi có sự kiện click
document.addEventListener('click', function (event) {
    var target = event.target;
    if (target.type === 'checkbox' && target.classList.contains('custom-checkbox')) {
        var checkboxLabel = target.nextElementSibling.querySelector('p').textContent.trim();
        var savedSelections2 = {};
        savedSelections2[checkboxLabel] = target.checked;

        checkboxes.forEach(function (otherCheckbox) {
            var otherValue = otherCheckbox.nextElementSibling.querySelector('p').textContent.trim();
            if (otherCheckbox !== target) {
                savedSelections2[otherValue] = false;
            }
        });

        sessionStorage.setItem('checkboxSelections2', JSON.stringify(savedSelections2));

        // Kiểm tra nếu không có checkbox nào được chọn thì xóa tham số từ URL
        var allCheckboxUnchecked = Object.values(savedSelections2).every(function (value) {
            return value === false;
        });

        if (allCheckboxUnchecked) {
            var currentURL = new URL(window.location.href);
            currentURL.searchParams.delete('rateRange');
            window.history.replaceState({}, '', currentURL.toString());
        }

        // Kiểm tra nếu checkbox không được chọn, thì xóa tham số từ URL
        var currentURL = new URL(window.location.href);
        if (!target.checked) {
            currentURL.searchParams.delete('rateRange');
        }

        window.history.replaceState({}, '', currentURL.toString());
    }
});
