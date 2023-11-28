$(function() {
    const container = $('.container');
    $(document).on("click", ".pag-ctrl", function() {
        const curPage = Number($(this).data('pag'));

        $.ajax({
            url: 'categoryController/categoryController.php',
            type: 'GET',
            data: {
                pagNum: curPage
            },
            success: function (data) {
                container.html(data);
            }
        })
    })

    $(document).on("click", ".add-new-cate", function(e) {
        e.preventDefault();
        container.load('../views/category/add.php');
    })

    let cateId = '';

    $(document).on('click', '.change-cate-btn', function(e) {
        e.preventDefault();

        container.load(`../views/category/edit.php`);
        cateId = $(this).data('cate');
        
        $.ajax({
            type: "GET",
            url: "../controllers/categoryController/edit.php",
            dataType: "json",
            data: {
                type: 'edit',
                id: cateId
            },
            success: function(data) {

                $('#name-cate').val(data.ten_loai);
                $('#hightlight').val(data.noi_bat);
                $('#hide-show').val(data.an_hien);
                $('.img-chose img').attr('src', `../../public/app/imgs/${data.hinh_anh}`);
            },
            error: function(err) {
                console.error(err);
            }
        })
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

    $(document).on('submit', '#edit_category', function(e) {
        e.preventDefault();

        if($('.req').val() === '') {
            $('h2').find('span').remove();
            $('h2').append('<span>Vui lòng nhập đủ các trường (*)</span>');
            return;
        }
    
        const formData = new FormData(this);
    
        formData.append('id', cateId);
        formData.append('type', 'done');
        formData.append('name', $('#name-cate').val());
        if($('#cate-img')[0].files[0]) {
            formData.append('cate-img', $('#cate-img')[0].files[0]);
        }
        formData.append('hightlight', Number($('#hightlight').val()));
        formData.append('hide-show', Number($('#hide-show').val()));
    
        $.ajax({
            type: 'POST',
            url: "../controllers/categoryController/edit.php",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                console.log(data);
                alert(data.message);
                container.load(`../controllers/categoryController/categoryController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        });
    });

    $(document).on('submit', '#add_category', function(e) {
        e.preventDefault();

        if($('.req').val() === '') {
            $('h2').find('span').remove();
            $('h2').append('<span>Vui lòng nhập đủ các trường (*)</span>');
            return;
        }
    
        const formData = new FormData(this);
    
        formData.append('id', cateId);
        formData.append('type', 'add');
        formData.append('name', $('#name-cate').val());
        formData.append('cate-img', $('#cate-img')[0].files[0]);
        formData.append('hightlight', Number($('#hightlight').val()));
        formData.append('hide-show', Number($('#hide-show').val()));
    
        $.ajax({
            type: 'POST',
            url: "../controllers/categoryController/add.php",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/categoryController/categoryController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        });
    });

    $(document).on('click', '.del-btn-cate', function(e) {
        e.preventDefault();

        const isDel = confirm("Chắc chắn muốn xóa loại hàng này?");
        if(!isDel) return;

        cateId = $(this).data('cate');
        
        $.ajax({
            type: "GET",
            url: "../controllers/categoryController/delete.php",
            dataType: "json",
            data: {
                type: 'delete',
                id: cateId
            },
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/categoryController/categoryController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        })
    })

})