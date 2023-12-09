$(document).ready(function () {
    var cartForm = document.getElementById("cartForm");

    function loadProductByCart() {
        var userid = cartForm.getAttribute("data-id-user");
        $.ajax({
            url: 'cartControllers/selectProductByCart.php',
            type: 'POST',
            data: { userid: userid },
            success: function (data) {
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

    function loadToltalPromoPriceProducts() {
        var userid = cartForm.getAttribute("data-id-user");

        $.ajax({
            url: 'cartControllers/selectTotalPromoPrice.php',
            type: 'POST',
            data: { userid: userid },
            success: function (data) {
                $(".promoPrice").html(data);
            }
        });
    }

    loadToltalPromoPriceProducts()

    function loadToltalLastPrice() {
        var userid = cartForm.getAttribute("data-id-user");
        $.ajax({
            url: 'cartControllers/selectLastPrice.php',
            type: 'POST',
            data: { userid: userid },
            success: function (data) {
                $(".lastPrice").html(data);
            }
        });
    }

    loadToltalLastPrice();

    $(document).on('input', '.quantityProducts', function (event) {
        event.preventDefault();
        var quantity = $(this).val();
        var magh = $(this).data("id-gh");
        var masp = $(this).data("id-masp");

        $.ajax({
            url: 'cartControllers/insertCart.php',
            type: 'POST',
            data: { magh: magh, quantity: quantity, masp: masp },
            success: function () {
                loadProductByCart();
                loadToltalPriceProducts();
                loadToltalPriceProducts();
                loadToltalLastPrice();
                loadToltalPromoPriceProducts();
            },
            error: function (xhr, status, error) {
                console.error("Error updating cart: " + error);
            }
        });
    });
});
