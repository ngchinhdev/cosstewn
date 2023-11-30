$(function() {
    const container = $('.container');
    let roleId = '';

    $(document).on('click', '.change-role-btn', function(e) {
        e.preventDefault();
    
        container.load(`../views/role/edit.php`);
        roleId = $(this).data('role');
        
        $.ajax({
            type: "GET",
            url: "../controllers/roleController/edit.php",
            dataType: "json",
            data: {
                type: 'edit',
                id: roleId
            },
            success: function(data) {
                console.log(data);
                $('.role-box input').val(data.vai_tro);
            },
            error: function(err) {
                console.error(err);
            }
        })
    })

    $(document).on('submit', '#edit_role', function(e) {
        e.preventDefault();

        let validationFailed = false;

        $('.req').each(function() {
            if ($(this).val() === '') {
                $('h2').find('span').remove();
                $('h2').append('<span>Vui lòng nhập đủ các trường (*)</span>');
                validationFailed = true;
                return false;
            }
        });

        if (validationFailed) {
            return false; 
        }
        
        const formData = new FormData(this);
    
        formData.append('id', roleId);
        formData.append('type', 'done');
        formData.append('role', $('#role').val());
    
        $.ajax({
            type: 'POST',
            url: "../controllers/roleController/edit.php",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/roleController/roleController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        });
    });

    $(document).on("click", ".add-new-role", function(e) {
        e.preventDefault();
        container.load('../views/role/add.php');
    })

    $(document).on('submit', '#add_role', function(e) {
        e.preventDefault();

        let validationFailed = false;

        $('.req').each(function() {
            if ($(this).val() === '') {
                $('h2').find('span').remove();
                $('h2').append('<span>Vui lòng nhập đủ các trường (*)</span>');
                validationFailed = true;
                return false;
            }
        });

        if (validationFailed) {
            return false; 
        }
        
        const formData = new FormData(this);
    
        formData.append('id', roleId);
        formData.append('type', 'add');
        formData.append('role', $('#role').val());
    
        $.ajax({
            type: 'POST',
            url: "../controllers/roleController/add.php",
            dataType: 'json',
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/roleController/roleController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        });
    });

    $(document).on('click', '.del-btn-role', function(e) {
        e.preventDefault();

        const isDel = confirm("Chắc chắn muốn xóa mục này?");
        if(!isDel) return;

        $('#role').hide();
        roleId = $(this).data('role');
        
        $.ajax({
            type: "POST",
            url: "../controllers/roleController/delete.php",
            dataType: "json",
            data: {
                type: 'delete',
                id: roleId
            },
            success: function(data) {
                alert(data.message);
                container.load(`../controllers/roleController/roleController.php`);
            },
            error: function(err) {
                console.error(err);
            }
        })
    });
})