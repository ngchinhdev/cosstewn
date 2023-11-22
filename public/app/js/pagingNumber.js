document.addEventListener('DOMContentLoaded', function () {
    // Lấy tất cả các thẻ a có class là 'node-paging'
    var pageLinks = document.querySelectorAll('.node-paging');

    // Lặp qua từng thẻ a và thêm sự kiện click
    pageLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a

            // Lấy giá trị của thuộc tính 'data-page-num'
            var pageNumber = link.getAttribute('data-page-num');

            // Kiểm tra xem có giá trị hay không
            if (pageNumber !== null) {
                // Tạo URL hiện tại thành đối tượng URL
                var url = new URL(window.location.href);

                // Thêm hoặc cập nhật tham số 'pageNumber'
                url.searchParams.set('pageNumber', pageNumber);

                // Chuyển hướng trình duyệt đến URL mới
                window.location.href = url.toString();

            }
        });
    });
});
