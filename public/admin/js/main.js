$(function () {
    const container = $('.container');
    container.load(`../controllers/dashboardController/dashboardController.php`);

    let myChart = null;

    $(document).on('click', '.link', function() {
        const linkParent = $(this).parent('li');
        linkParent.siblings().removeClass('active');
        linkParent.addClass('active');

        const curPage = $(this).data('control');
        container.load(`../controllers/${curPage}Controller/${curPage}Controller.php`);
        if(curPage === 'dashboard') {
            myChart.destroy();
            callAjaxChart();
        }
    })

    function callAjaxChart() {
        $.ajax({
            type: "POST",
            url: "../controllers/dashboardController/topSaleCategory.php",
            dataType: "json",
            data: {
                type: 'top-cate',
            },
            success: function(data) {
                const color = ['#ffcd1f', '#2A2798', '#115C3D', '#7B2798', '#D83F64'];
                const hints = $('.hints');
                const hintItems = data.map((d, i) => {
                    return `<div class="row">
                                <div class="color" style="background-color: ${color[i]}"></div>
                                <span>${d.ten_loai}</span>
                            </div>`
                });
                hints.html(hintItems);

                myChart = new Chart($('#chart-exam'), {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: data.map(d => d.so_luong),
                            backgroundColor: color
                        }]
                    }
                });

                callAjaxChart();
            },
            error: function(err) {
                console.error(err);
            }
        })
    }

    callAjaxChart();
})

