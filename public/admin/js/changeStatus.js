$(document).ready(function () {
    $(document).on("change", ".fbStatus", function () {
        var selectedValue = $(this).val();
        var mabl = $(this).data('mabl')
        $.ajax({
            url: 'commentController/detailFBController.php',
            type: 'POST',
            data: {
                selectedValue: selectedValue,
                mabl: mabl
            },
            success: function (data) {
                $(".pageDetailFB").html(data);
            }
        });
    });

    $(document).on("change", ".orderStatus", function () {
        var selectedValue = $(this).val();
        var madh = $(this).data('madh');

        var selectElement = $(this);
        if (selectedValue === "1" || selectedValue === "2") {
            $.ajax({
                url: 'orderController/orderController.php',
                type: 'POST',
                data: {
                    selectedValue: selectedValue,
                    madh: madh
                },
                success: function (data) {
                    var wrapStatus = selectElement.closest('tr').find('.wrap-status');
                    updateStatusDisplay(wrapStatus, selectedValue);
                    $(".pageOrder").html(data);
                    selectElement.val('Thao tác');
                }
            });
        }
    });

    function updateStatusDisplay(wrapStatus, selectedValue) {
        if (selectedValue === "1") {
            wrapStatus.html('<div class="status-order" style="background: #dbffcc; color: #39bb02; border: 1px solid #39bb02;">Đã xác nhận</div>');
        } else if (selectedValue === "2") {
            wrapStatus.html('<div class="status-order" style="background: #FDEAF0; color:#fb2d4c; border: 1px solid #fb2d4c;">Đã hủy</div>');
        }
    }


});