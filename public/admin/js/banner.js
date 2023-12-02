$(function() {
    const container = $('.container');

    let bannerId = '';

    $(document).on('click', '.see-detail', function(e) {
        e.preventDefault();

        container.load(`../views/banner/detail.php`);
        bannerId = $(this).data('type');
        console.log(bannerId)
        
        // $.ajax({
        //     type: "GET",
        //     url: "../controllers/categoryController/edit.php",
        //     dataType: "json",
        //     data: {
        //         type: 'edit',
        //         id: bannerId
        //     },
        //     success: function(data) {

        //         $('#name-cate').val(data.ten_loai);
        //         $('#hightlight').val(data.noi_bat);
        //         $('#hide-show').val(data.an_hien);
        //         $('.img-chose img').attr('src', `../../public/app/imgs/${data.hinh_anh}`);
        //     },
        //     error: function(err) {
        //         console.error(err);
        //     }
        // })
    })

    $(document).on('change', '.cate-box input', function(e) {
        let file = $(this)[0].files[0];
        let reader = new FileReader();
        $('.img-chose').html('');
        reader.onload = (function(file) {
            return function(e) {
                let img = document.createElement("img");
                img.src = e.target.result;

                $('.img-chose').append(img);
            };
        })(file);
        reader.readAsDataURL(file);
    })

})