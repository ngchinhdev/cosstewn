$(function() {
    const container = $('.container');

    let bannerTypeId = '';

    function loadDetail(nameType) {
        $.ajax({
            type: "POST",
            url: "../controllers/bannerController/detailBanner.php",
            dataType: "json",
            data: {
                type: 'detail',
                id: bannerTypeId
            },
            success: function(data) {
                $('.ctg_name strong').text(nameType);
                const containerBanner = $('.container_detail');
                containerBanner.html('');

                const markup = data.map(banner => `<div class="banner_box banner_box-${banner.mabn}">
                                        <div class="image">
                                            <img src="../../public/app/imgs/banners/${banner.duong_dan}" alt="">
                                        </div>
                                        <div class="buttons">
                                            <div class="change">
                                                <label for="change-banner-${banner.mabn}" role="button">Đổi ảnh</label>
                                                <input type="file" id="change-banner-${banner.mabn}" class="change-banner" data-banner="${banner.mabn}">
                                            </div>
                                            <div class="delete-banner" role="button" data-banner="${banner.mabn}">Xóa ảnh</div>
                                        </div>
                                    </div>`).join(' ');

                containerBanner.html(markup);
                
            },
            error: function(err) {
                console.error(err);
            }
        })
    }

    $(document).on('click', '.see-detail', function(e) {
        e.preventDefault();

        container.load(`../views/banner/detail.php`);
        bannerTypeId = $(this).data('type');
        const nameType = $(`.name-banner-${bannerTypeId}`).text();
        
        loadDetail(nameType);
    })

    $(document).on('change', '.change-banner', function(e) {
        const curBannerID = $(this).data('banner');
        console.log(curBannerID);

        const file = e.target.files[0];

        if (file) {
            let imgUrl = URL.createObjectURL(file);
    
            $(`.banner_box-${curBannerID} img`).attr('src', imgUrl);
        }

        const formData = new FormData();
        formData.append('type', 'update');
        formData.append('id', curBannerID);
        formData.append('banner', file);

        $.ajax({
            type: "POST",
            url: "../controllers/bannerController/updateBanner.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
            },
            error: function (err) {
                console.error(err);
            }
        });
    })

    $(document).on('click', '.delete-banner', function(e) {
        const curBannerID = $(this).data('banner');

        const isDelete = confirm("Chắc chắn muốn xóa?");

        if(!isDelete) return;

        $.ajax({
            type: "POST",
            url: "../controllers/bannerController/deleteBanner.php",
            data: {
                type: 'delete',
                id: curBannerID
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                loadDetail();
            },
            error: function (err) {
                console.error(err);
            }
        });
    })

    $(document).on('change', '#banner-new-btn', function(e) {
        const file = e.target.files[0];

        console.log(file)
        const formData = new FormData();
        formData.append('type', 'add');
        formData.append('id', bannerTypeId);
        formData.append('banner', file);

        $.ajax({
            type: "POST",
            url: "../controllers/bannerController/addBanner.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                loadDetail('');
            },
            error: function (err) {
                console.error(err);
            }
        });
    })

})