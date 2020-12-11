
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thay doi </h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên hàng: </label>
                    <input type="text" class="form-control"  value="<?php echo $items['itemsname'] ?>"  name="itemsname" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Loại hàng:</label>
                    <input type="text" class="form-control" value="<?php echo $items['itemsspecies'] ?>" name="itemsspecies" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Giá:</label>
                    <input type="number"class="form-control" value="<?php echo $items['price'] ?>" name="price" placeholder="Nhập" required>
                </div>
                <div class="form-group">
                    <label>Số lương :</label>
                    <input type="number"class="form-control" value="<?php echo $items['amount'] ?>"  name="amount" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Ngay</label>
                    <input type="date"class="form-control"value="<?php echo $items['date'] ?>"  name="date" placeholder="Nhập " required>
                </div>
                <div class="form-group">
                    <label>Mô tả </label>
                    <input type="text"class="form-control"value="<?php echo $items['describe'] ?>"  name="describe" placeholder="Nhập " required>
                </div>
                <button type="submit" class="btn btn-primary">thay doi </button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Thoát</button>
            </form>
        </div>
    </div>
</div>