$(document).ready(function () {
    $(document).on("click", ".btn-addpromo", function (e) {
        e.preventDefault();

        // Lấy giá trị từ các trường nhập liệu
        var namepromo = $("input[name='namepromo']").val();
        var pricepromo = $("input[name='pricepromo']").val();
        var startdate = $("input[name='startdate']").val();
        var enddate = $("input[name='enddate']").val();

        // Tạo đối tượng FormData để chứa dữ liệu
        var formData = new FormData();

        // Thêm các giá trị vào FormData
        formData.append('namepromo', namepromo);
        formData.append('pricepromo', pricepromo);
        formData.append('startdate', startdate);
        formData.append('enddate', enddate);

        // Gửi dữ liệu lên máy chủ thông qua AJAX
        $.ajax({
            url: 'promoteController/addpromoController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $(".box-addpromo").html(data);
            },
            error: function (error) {
                // Xử lý lỗi nếu có
                console.log(error);
            }
        });
    });

    $(document).on("click", ".btn-adddetailpromo", function (e) {
        e.preventDefault();

        // Lấy giá trị từ các trường nhập liệu
        var masp = $("select[name='products']").val();
        var makm = $("#form-adddetailpromo").data("makm");
        var namekm = $("#form-adddetailpromo").data("namekm");
        // Tạo đối tượng FormData để chứa dữ liệu
        var formData = new FormData();

        // Thêm các giá trị vào FormData
        formData.append('masp', masp);
        formData.append('makm', makm);
        formData.append('namekm', namekm);
        // Gửi dữ liệu lên máy chủ thông qua AJAX
        $.ajax({
            url: 'promoteController/insertdetailpromoController.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                $(".box-adddetailpromo").html(data);
            },
            error: function (error) {
                // Xử lý lỗi nếu có
                console.log(error);
            }
        });
    });
});
