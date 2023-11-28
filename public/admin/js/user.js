$(function() {
    const container = $('.container');
    let userId = '';

    $(document).on('click', '.change-user-btn', function(e) {
        e.preventDefault();

        $('#user').hide();
        container.load(`../views/user/edit.php`);
        userId = $(this).data('user');
        
        $.ajax({
            type: "GET",
            url: "../controllers/userController/edit.php",
            dataType: "json",
            data: {
                type: 'edit',
                id: userId
            },
            success: function(data) {
                console.log(data);
                data = data[0];

                $('#name').val(data.ho_ten);
                $('#email').val(data.email);
                $('#phone').val(data.so_dien_thoai);
                $('#adr').val(data.dia_chi);
                $('#role').val(data.mavt);
                $('#pass').val(data.mat_khau);
                $('.img-chose img').attr('src', `../../public/app/imgs/${data.hinh_anh}`);
            },
            error: function(err) {
                console.error(err);
            }
        })
    })

    $(document).on('submit', '#edit_user', function(e) {
        e.preventDefault();

        if($('.req').val() === '' || ($('.pass-box #pass').val() !== '' && $('.pass-box #pass').val().length < 5)) {
            $('h2').find('span').remove();
            $('h2').append('<span>Vui lòng nhập đủ các trường (*)</span>');
            return;
        }
    
        const formData = new FormData(this);
    
        formData.append('id', userId);
        formData.append('type', 'done');
        formData.append('name', $('#name').val());
        formData.append('email', $('#email').val());
        formData.append('phone', $('#phone').val());
        formData.append('adr', $('#adr').val());
        formData.append('pass', $('#pass').val());
        if($('#avt')[0].files[0]) {
            formData.append('avt', $('#avt')[0].files[0]);
        }
        formData.append('role', $('#role').val());
    
        $.ajax({
            type: 'POST',
            url: "../controllers/userController/edit.php",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/userController/userController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        });
    });

    $(document).on('change', '.avt-box input', function(e) {
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

    $(document).on('click', '.del-btn-user', function(e) {
        e.preventDefault();

        const isDel = confirm("Chắc chắn muốn xóa người dùng này?");
        if(!isDel) return;

        $('#user').hide();
        userId = $(this).data('user');
        
        $.ajax({
            type: "GET",
            url: "../controllers/userController/delete.php",
            dataType: "json",
            data: {
                type: 'delete',
                id: userId
            },
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/userController/userController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        })
    })

    $(document).on("click", ".pag-ctrl-user", function() {
        const container = $('.container');
        const curPage = Number($(this).data('pag'));

        $.ajax({
            url: 'userController/userController.php',
            type: 'GET',
            data: {
                pagNum: curPage
            },
            success: function (data) {
                container.html(data);
            }
        })
    })
    
})