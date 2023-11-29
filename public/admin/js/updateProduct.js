$(document).ready(function () {
    $(document).on("click", ".btn-fixprd", function (e) {
        e.preventDefault();

        // Lấy giá trị từ thuộc tính data-masp
        var masp = $("#pagefixproduct").data("masp");

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
        formData.append('masp', masp);
        formData.append('nameproduct', nameProduct);
        formData.append('priceOrigin', priceOrigin);
        formData.append('priceNow', priceNow);
        formData.append('quantityprd', quantityPrd);
        formData.append('describeprd', describePrd);
        formData.append('brandproduct', brandProduct);
        formData.append('statusproduct', statusProduct);

        var numImages = $(".box-images").data("count-img");


        for (var i = 0; i < numImages; i++) {
            var fileInput = $("input[name='image_variation" + i + "']")[0];
            if (fileInput.files.length > 0) {
                formData.append('image_variation[' + i + ']', fileInput.files[0]);
            }
        }

        // Gửi dữ liệu lên máy chủ thông qua AJAX
        $.ajax({
            url: 'productController/fixproductController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#pagefixproduct").html(data);
            },
            error: function (error) {
                // Xử lý lỗi nếu có
                console.log(error);
            }
        });
    });
});
