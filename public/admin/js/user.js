$(function() {
    const container = $('.container');
    let userId = '';

    $(document).on('click', '.change-btn', function(e) {
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
            },
            error: function(err) {
                console.error(err);
            }
        })
    })

    $(document).on('submit', '#edit_user', function(e) {
        e.preventDefault();
    
        const formData = new FormData(this);
    
        formData.append('id', userId);
        formData.append('type', 'done');
        formData.append('name', $('#name').val());
        formData.append('email', $('#email').val());
        formData.append('phone', $('#phone').val());
        formData.append('adr', $('#adr').val());
        formData.append('pass', $('#pass').val());
        formData.append('avt', $('#avt')[0].files[0]);
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

    $(document).on('click', '.del-btn', function(e) {
        e.preventDefault();

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
    
})