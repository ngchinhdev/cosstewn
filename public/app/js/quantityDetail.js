function increaseQuantity() {
    var quantityInput = document.getElementById('quantity-pd');
    var maxValue = quantityInput.getAttribute("data-max-value");
    var currentQuantity = parseInt(quantityInput.value, 10);
    if (currentQuantity < maxValue) {
        quantityInput.value = currentQuantity + 1;
    }
}


function decreaseQuantity() {
    var quantityInput = document.getElementById('quantity-pd');
    var currentQuantity = parseInt(quantityInput.value, 10);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}

document.getElementById('quantity-pd').addEventListener('input', function () {
    var maxValue = parseInt(this.getAttribute('data-max-value'), 10);
    var enteredValue = parseInt(this.value, 10);

    if (enteredValue > maxValue) {
        Swal.fire({
            icon: 'warning',
            title: 'Thông báo',
            text: 'Số lượng sản phẩm chỉ còn ' + maxValue,
        });

        this.value = maxValue;
    }
});