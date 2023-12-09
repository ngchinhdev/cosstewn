function handleInput(input) {
    var enteredValue = parseInt(input.value, 10);
    var maxValue = parseInt(input.getAttribute('data-max-value'), 10);

    // Kiểm tra nếu giá trị nhập vào vượt quá giới hạn
    if (enteredValue > maxValue) {
        var maxValue = parseInt(input.getAttribute('data-max-value'), 10);
        Swal.fire({
            icon: 'warning',
            title: 'Thông báo',
            text: 'Số lượng sản phẩm chỉ còn ' + maxValue,
        });
        input.value = maxValue;
    }
}