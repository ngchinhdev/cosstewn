$(document).ready(function () {
    $(document).on("change", "#selectOrder", function () {
        var selectedValue = $(this).val();

        $.ajax({
            url: 'orderController/orderController.php',
            type: 'POST',
            data: {
                selectedValue: selectedValue
            },
            success: function (data) {
                $("#pageOrder").html(data);
            }
        });
    });

});