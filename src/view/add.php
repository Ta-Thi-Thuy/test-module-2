
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mặt hàng </h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên hàng: </label>
                    <input type="text" class="form-control" name="itemsname" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Loại hàng:</label>
                    <input type="text" class="form-control" name="itemsspecies" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Giá:</label>
                    <input type="number"class="form-control" name="price" placeholder="Nhập" required>
                </div>
                <div class="form-group">
                    <label>Số lương :</label>
                    <input type="number"class="form-control" name="amount" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Ngay</label>
                    <input type="date"class="form-control" name="date" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Mô tả </label>
                    <input type="text"class="form-control" name="describe" placeholder="Nhập " required>
                </div>
                <button type="submit" class="btn btn-primary">Nhập mặt hàng </button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Thoát</button>
            </form>
        </div>
    </div>
</div>