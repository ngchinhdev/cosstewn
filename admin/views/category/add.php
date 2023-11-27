<form id="edit_category" method="post" enctype="multipart/form-data">
    <h2>Thêm loại hàng</h2>
    <div class="fields">
        <div class="name-box box">
            <label for="name-cate">Tên loại</label>
            <input type="text" id="name-cate" placeholder="Nhập tên loại">
        </div>
    </div>
    <div class="last-box">
        <div class="cate-box">
            <label for="cate-img">Hình ảnh</label>
            <div class="ctn">
                <label for="cate-img" class="choose">Chọn hình</label>
                <input type="file" id="cate-img">
                <div class="img-chose">
                    <img src="../../public/app/imgs/ahc.webp" alt="">
                </div>
            </div>
        </div>
        <div class="hightlight-box">
            <label for="hightlight">Nổi bật</label>
            <select name="" id="hightlight">
                <option value="1">Có</option>
                <option value="0">Không</option>
            </select>
        </div>
        <div class="role-box">
            <label for="hide-show">Ẩn/Hiện</label>
            <select name="" id="hide-show">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
    </div>
    <div class="submit-box">
        <button type="submit" role="button">Thêm</button>
    </div>
</form>