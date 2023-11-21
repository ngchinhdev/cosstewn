$(document).ready(function () {
    var cartForm = document.getElementById("cartForm");

    function loadProductByCart() {
        var userid = cartForm.getAttribute("data-id-user");
        $.ajax({
            url: 'cartControllers/selectProductByCart.php',
            type: 'POST',
            data: { userid: userid },
            success: function (data) {
                console.log(userid);
                $("#tableCart").html(data);
            }
        });
    }
    loadProductByCart();

    function loadToltalPriceProducts() {
        var userid = cartForm.getAttribute("data-id-user");
        $.ajax({
            url: 'cartControllers/selectTotalPrice.php',
            type: 'POST',
            data: { userid: userid },
            success: function (data) {
                $(".tongCong").html(data);
            }
        });
    }

    loadToltalPriceProducts();

    $(document).on('input', '.quantityProducts', function (event) {
        event.preventDefault();
        var quantity = $(this).val();
        var magh = $(this).data("id-gh");
        $.ajax({
            url: 'cartControllers/insertCart.php',
            type: 'POST',
            data: { magh: magh, quantity: quantity },
            success: function () {
                console.log(magh);
                console.log(quantity);
                loadProductByCart();
                loadToltalPriceProducts();
            },
            error: function (xhr, status, error) {
                console.error("Error updating cart: " + error);
            }
        });
    });

});
