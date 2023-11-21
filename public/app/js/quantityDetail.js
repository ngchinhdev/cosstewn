function increaseQuantity() {
    var quantityInput = document.getElementById('quantity-pd');
    var currentQuantity = parseInt(quantityInput.value, 10);
    quantityInput.value = currentQuantity + 1;
}

function decreaseQuantity() {
    var quantityInput = document.getElementById('quantity-pd');
    var currentQuantity = parseInt(quantityInput.value, 10);
    
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}