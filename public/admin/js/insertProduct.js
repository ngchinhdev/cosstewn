$(document).ready(function () {
    $(document).on("click", ".btn-addprd", function (e) {
        e.preventDefault();

        // Lấy giá trị từ các trường nhập liệu
        var nameProduct = $("input[name='nameproduct']").val();
        var priceOrigin = $("input[name='priceOrigin']").val();
        var priceNow = $("input[name='priceNow']").val();
        var quantityPrd = $("input[name='quantityprd']").val();
        var describePrd = $("input[name='describeprd']").val();
        var brandProduct = $("select[name='brandproduct']").val();
        var statusProduct = $("select[name='statusproduct']").val();

        // Tạo đối tượng FormData để chứa dữ liệu
        var formData = new FormData();

        // Thêm các giá trị vào FormData
        formData.append('nameproduct', nameProduct);
        formData.append('priceOrigin', priceOrigin);
        formData.append('priceNow', priceNow);
        formData.append('quantityprd', quantityPrd);
        formData.append('describeprd', describePrd);
        formData.append('brandproduct', brandProduct);
        formData.append('statusproduct', statusProduct);

        formData.append('image_variation1', $("input[name='image_variation1']")[0].files[0]);
        formData.append('image_variation2', $("input[name='image_variation2']")[0].files[0]);
        formData.append('image_variation3', $("input[name='image_variation3']")[0].files[0]);
        formData.append('image_variation4', $("input[name='image_variation4']")[0].files[0]);

        // Gửi dữ liệu lên máy chủ thông qua AJAX
        $.ajax({
            url: 'productController/addproductController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#pageaddproduct").html(data);
            },
            error: function (error) {
                // Xử lý lỗi nếu có
                console.log(error);
            }
        });
    });
});
