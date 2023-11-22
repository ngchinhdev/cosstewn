$(document).ready(function () {
    var commentForm = document.getElementById("commentForm"); // Move it here

    function loadData(arrangeType) {
        var productId = commentForm.getAttribute("data-product-id");
        $.ajax({
            url: 'detailController/selectFeedback.php',
            type: 'POST',
            data: { productId: productId, arrangeType: arrangeType },
            success: function (data) {
                $("#commentContainer").html(data);
            }
        });
    }

    function CountFeedback() {
        var productId = commentForm.getAttribute("data-product-id");
        $.ajax({
            url: 'detailController/selectCountFB.php',
            type: 'POST',
            data: { productId: productId },
            success: function (data) {
                console.log(productId);
                $(".quantity-comment").html(data);
            }
        });
    }


    /* display: none or block button comment */

    const inputcmt = document.getElementById('textfb');

    function toggleSendButton() {
        var sendButton = document.querySelector('.btn-sendcmt');
        if (inputcmt.value.trim() === "") {
            sendButton.style.display = 'none';
        } else {
            sendButton.style.display = 'block';
        }
    }
    inputcmt.addEventListener('input', toggleSendButton);

    loadData();
    CountFeedback();
    toggleSendButton();

    $(".items-arrange a").on("click", function (e) {
        e.preventDefault();
        var arrangeType = $(this).data("cmt-arrange");
        loadData(arrangeType);
    });

    $(".btn-sendcmt").on("click", function (e) {
        e.preventDefault();
        var productId = commentForm.getAttribute("data-product-id");
        var userId = commentForm.getAttribute("data-id-user");
        var textfb = $("#textfb").val();

        $.ajax({
            url: 'detailController/insertFeedback.php',
            type: 'POST',
            data: { textfb: textfb, productId: productId, userId: userId },
            success: function () {
                $("#textfb").val("");
                loadData();
                CountFeedback();
                toggleSendButton();
            }
        });
    });

});
